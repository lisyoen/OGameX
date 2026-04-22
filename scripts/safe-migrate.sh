#!/bin/bash
# safe-migrate.sh: Production-safe Laravel migration wrapper with automatic backup
# Usage: ./scripts/safe-migrate.sh [artisan migrate arguments...]
set -e

# Color output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(dirname "$SCRIPT_DIR")"
BACKUP_DIR="$HOME/backups/ogame"

# Ensure backup directory exists
mkdir -p "$BACKUP_DIR"

# Parse arguments to detect destructive commands
DESTRUCTIVE_PATTERN="fresh|refresh|reset|wipe"
FIRST_ARG="${1:-}"

if [[ "$FIRST_ARG" =~ migrate:(${DESTRUCTIVE_PATTERN}) ]]; then
    # Check if running in production
    APP_ENV=$(grep "^APP_ENV=" "$PROJECT_ROOT/.env" 2>/dev/null | cut -d= -f2 | tr -d '[:space:]' | tr -d '\r' || echo "")

    if [ "$APP_ENV" = "production" ]; then
        echo -e "${RED}ERROR: Destructive migration command '$FIRST_ARG' is blocked in production.${NC}" >&2
        echo -e "${YELLOW}If you need to run destructive migrations, temporarily set APP_ENV to another value.${NC}" >&2
        exit 1
    fi
fi

# Get database credentials from .env
DB_HOST=$(grep "^DB_HOST=" "$PROJECT_ROOT/.env" 2>/dev/null | cut -d= -f2 | tr -d '[:space:]' | tr -d '\r' || echo "ogamex-db")
DB_PORT=$(grep "^DB_PORT=" "$PROJECT_ROOT/.env" 2>/dev/null | cut -d= -f2 | tr -d '[:space:]' | tr -d '\r' || echo "3306")
DB_DATABASE=$(grep "^DB_DATABASE=" "$PROJECT_ROOT/.env" 2>/dev/null | cut -d= -f2 | tr -d '[:space:]' | tr -d '\r' || echo "ogamex")
DB_USERNAME=$(grep "^DB_USERNAME=" "$PROJECT_ROOT/.env" 2>/dev/null | cut -d= -f2 | tr -d '[:space:]' | tr -d '\r' || echo "ogamex")
DB_PASSWORD=$(grep "^DB_PASSWORD=" "$PROJECT_ROOT/.env" 2>/dev/null | cut -d= -f2 | tr -d '[:space:]' | tr -d '\r' || echo "")

# Check if real user accounts exist
echo -e "${YELLOW}Checking for real user accounts...${NC}"
USER_COUNT=$(docker exec ogame-ogamex-db-1 sh -c "echo \"SELECT COUNT(*) FROM users WHERE email IN ('lisyoen@gmail.com','legor@ogamex.local');\" | mariadb -h $DB_HOST -u $DB_USERNAME -p'$DB_PASSWORD' --skip-ssl $DB_DATABASE -N" 2>/dev/null || echo "0")

if [ "$USER_COUNT" -gt 0 ]; then
    echo -e "${GREEN}Found $USER_COUNT real user account(s). Creating backup before migration...${NC}"

    # Create timestamped backup
    BACKUP_FILE="$BACKUP_DIR/pre-migrate-$(date +%Y%m%d-%H%M%S).sql.gz"

    echo -e "${YELLOW}Backing up to: $BACKUP_FILE${NC}"
    docker exec ogame-ogamex-db-1 sh -c "mariadb-dump -h $DB_HOST -u $DB_USERNAME -p'$DB_PASSWORD' --single-transaction --quick $DB_DATABASE" 2>/dev/null | gzip > "$BACKUP_FILE"

    if [ $? -ne 0 ] || [ ! -s "$BACKUP_FILE" ]; then
        echo -e "${RED}ERROR: Backup failed. Aborting migration for safety.${NC}" >&2
        rm -f "$BACKUP_FILE"
        exit 2
    fi

    BACKUP_SIZE=$(du -h "$BACKUP_FILE" | cut -f1)
    echo -e "${GREEN}Backup created successfully: $BACKUP_SIZE${NC}"
else
    echo -e "${YELLOW}No real user accounts found. Skipping backup.${NC}"
fi

# Display usage if no arguments
if [ -z "$FIRST_ARG" ]; then
    echo "Usage: $0 <artisan migrate command>"
    echo ""
    echo "Examples:"
    echo "  $0 migrate"
    echo "  $0 migrate --pretend"
    echo "  $0 migrate:status"
    echo ""
    echo "Destructive commands (migrate:fresh, migrate:refresh, etc.) are blocked in production."
    echo "Real user accounts trigger automatic backup before any migration."
    exit 0
fi

# Execute the migration command
echo -e "${YELLOW}Executing: php artisan $@${NC}"
cd "$PROJECT_ROOT"
docker compose exec ogamex-app php artisan "$@"

EXIT_CODE=$?
if [ $EXIT_CODE -eq 0 ]; then
    echo -e "${GREEN}Migration completed successfully.${NC}"
else
    echo -e "${RED}Migration failed with exit code $EXIT_CODE${NC}" >&2
fi

exit $EXIT_CODE
