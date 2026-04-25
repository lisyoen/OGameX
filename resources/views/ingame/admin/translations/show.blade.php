@extends('ingame.layouts.main')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>{{ __('t_ingame.admin.translations_show.title', ['ns' => $ns]) }}</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>{{ __('t_ingame.admin.translations_show.title', ['ns' => $ns]) }}</h2>
            </div>
            <div class="content">
                {{-- Back Link --}}
                <div style="margin-bottom: 16px;">
                    <a href="{{ route('admin.translations.index') }}" class="btn">{{ __('t_ingame.admin.translations_show.back_to_list') }}</a>
                </div>

                {{-- Summary Stats --}}
                @php
                    $stats = ['ok' => 0, 'untranslated' => 0, 'missing_ko' => 0, 'placeholder_mismatch' => 0];
                    foreach ($pairs as $p) {
                        if (isset($stats[$p['status']])) {
                            $stats[$p['status']]++;
                        }
                    }
                    $totalCount = $totals['all'];
                    $okCount = $stats['ok'];
                    $untranslatedCount = $stats['untranslated'] + $stats['missing_ko'];
                    $mismatchCount = $stats['placeholder_mismatch'];
                @endphp

                <div style="margin-bottom: 20px; padding: 16px; background: #1e2a3a; border: 1px solid #415a77; border-radius: 6px;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 16px;">
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">{{ __('t_ingame.admin.translations_show.stats_total_keys') }}</div>
                            <div style="font-size: 18px; font-weight: bold; color: #fff;">{{ number_format($totalCount) }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">{{ __('t_ingame.admin.translations_show.stats_translated') }}</div>
                            <div style="font-size: 18px; font-weight: bold; color: #4ade80;">{{ number_format($okCount) }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">{{ __('t_ingame.admin.translations_show.stats_untranslated') }}</div>
                            <div style="font-size: 18px; font-weight: bold; color: #fb923c;">{{ number_format($untranslatedCount) }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">{{ __('t_ingame.admin.translations_show.stats_mismatch') }}</div>
                            <div style="font-size: 18px; font-weight: bold; color: #ef4444;">{{ number_format($mismatchCount) }}</div>
                        </div>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div style="margin-bottom: 20px; display: flex; gap: 12px;">
                    <button id="bulkSaveBtn" class="btn_blue" disabled style="opacity: 0.5;">
                        {{ __('t_ingame.admin.translations_show.bulk_save') }} (<span id="dirtyCount">0</span>)
                    </button>
                    <button id="commitBtn" class="btn">
                        {{ __('t_ingame.admin.translations_show.commit') }}
                    </button>
                </div>

                {{-- Translation Table --}}
                <div style="overflow-x: auto; max-height: 70vh; overflow-y: auto; border: 1px solid #415a77; border-radius: 6px;">
                    <table class="table544" cellspacing="0" cellpadding="0" style="width: 100%;">
                        <thead style="position: sticky; top: 0; background: #1e2a3a; z-index: 10;">
                            <tr>
                                <th style="width: 20%;">{{ __('t_ingame.admin.translations_show.table_key') }}</th>
                                <th style="width: 30%;">{{ __('t_ingame.admin.translations_show.table_en_original') }}</th>
                                <th style="width: 30%;">{{ __('t_ingame.admin.translations_show.table_ko_translation') }}</th>
                                <th style="width: 10%;">{{ __('t_ingame.admin.translations_show.table_placeholder') }}</th>
                                <th style="width: 10%;">{{ __('t_ingame.admin.translations_show.table_save') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pairs as $index => $pair)
                                <tr data-key="{{ $pair['key'] }}" data-status="{{ $pair['status'] }}">
                                    <td style="font-family: monospace; font-size: 11px; word-break: break-all;">
                                        {{ $pair['key'] }}
                                    </td>
                                    <td>
                                        <textarea readonly class="textInput en-text" style="width: 100%; min-height: 50px; resize: vertical; background: #1e2a3a; color: #b0c4de;" rows="2">{{ $pair['en'] }}</textarea>
                                    </td>
                                    <td>
                                        <textarea class="textInput ko-text" style="width: 100%; min-height: 50px; resize: vertical;" rows="2" data-original="{{ $pair['ko'] ?? '' }}">{{ $pair['ko'] ?? '' }}</textarea>
                                    </td>
                                    <td class="placeholder-badge" style="text-align: center;">
                                        @if($pair['status'] === 'ok')
                                            <span class="badge-ok" style="background: #4ade80; color: #000; padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold;">OK</span>
                                        @elseif($pair['status'] === 'placeholder_mismatch')
                                            <span class="badge-mismatch" style="background: #ef4444; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold;">mismatch</span>
                                        @elseif($pair['status'] === 'missing_ko' || $pair['status'] === 'untranslated')
                                            <span class="badge-missing" style="background: #6b7280; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold;">missing</span>
                                        @else
                                            <span class="badge-other" style="background: #6b7280; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold;">{{ $pair['status'] }}</span>
                                        @endif
                                    </td>
                                    <td class="save-status" style="text-align: center;">
                                        <span class="status-dot" style="font-size: 20px; color: #6b7280;" title="{{ __('t_ingame.admin.translations_show.status_initial') }}">●</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Commit Modal --}}
    <div id="commitModal" style="
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 9999;
        align-items: center;
        justify-content: center;
    ">
        <div style="
            background: #2a3d52;
            border: 2px solid #415a77;
            border-radius: 8px;
            padding: 24px;
            max-width: 600px;
            width: 90%;
        ">
            <h3 style="color: #f48406; margin-bottom: 16px;">{{ __('t_ingame.admin.translations_show.modal_title') }}</h3>
            <p style="color: #b0c4de; margin-bottom: 16px;">
                {{ __('t_ingame.admin.translations_show.modal_auto_commit_info') }}
            </p>
            <pre style="
                background: #1e2a3a;
                border: 1px solid #415a77;
                border-radius: 4px;
                padding: 12px;
                color: #4ade80;
                font-family: monospace;
                font-size: 12px;
                overflow-x: auto;
                margin-bottom: 16px;
            ">cd ~/projects/ogame
git status resources/lang/ko
git add resources/lang/ko
git commit -m "i18n(ko): update translations via /admin/translations"
# {{ __('t_ingame.admin.translations_show.modal_push_note') }}</pre>
            <p style="color: #fb923c; font-size: 12px; margin-bottom: 16px;">
                {{ __('t_ingame.admin.translations_show.modal_automation_note') }}
            </p>
            <button id="closeModalBtn" class="btn_blue">{{ __('t_ingame.admin.translations_show.modal_close') }}</button>
        </div>
    </div>

    <script>
    const URLS = @json([
        'save' => route('admin.translations.save'),
        'commit' => route('admin.translations.commit'),
    ]);
    const NS = @json($ns);

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const dirtyRows = new Set();

    // Extract placeholders using same regex as backend
    function extractPlaceholders(str) {
        const colons = (str.match(/:[a-zA-Z_][a-zA-Z0-9_]*/g) || []).sort();
        const braces = (str.match(/\{[a-zA-Z_][a-zA-Z0-9_]*\}/g) || []).sort();
        return { colons, braces };
    }

    function comparePlaceholders(en, ko) {
        const enPh = extractPlaceholders(en);
        const koPh = extractPlaceholders(ko);

        const colonMatch = JSON.stringify(enPh.colons) === JSON.stringify(koPh.colons);
        const braceMatch = JSON.stringify(enPh.braces) === JSON.stringify(koPh.braces);

        return colonMatch && braceMatch;
    }

    function updateBadge(row, match, isEmpty) {
        const badgeCell = row.querySelector('.placeholder-badge');
        if (isEmpty) {
            badgeCell.innerHTML = '<span class="badge-missing" style="background: #6b7280; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold;">missing</span>';
        } else if (match) {
            badgeCell.innerHTML = '<span class="badge-ok" style="background: #4ade80; color: #000; padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold;">OK</span>';
        } else {
            badgeCell.innerHTML = '<span class="badge-mismatch" style="background: #ef4444; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold;">mismatch</span>';
        }
    }

    function updateStatusDot(row, status, message = '') {
        const dot = row.querySelector('.status-dot');
        const colors = {
            initial: '#6b7280',
            saving: '#3b82f6',
            saved: '#4ade80',
            error: '#ef4444'
        };
        dot.style.color = colors[status] || colors.initial;
        dot.title = message || status;
    }

    function updateDirtyCount() {
        const count = dirtyRows.size;
        document.getElementById('dirtyCount').textContent = count;
        const bulkBtn = document.getElementById('bulkSaveBtn');
        if (count > 0) {
            bulkBtn.disabled = false;
            bulkBtn.style.opacity = '1';
        } else {
            bulkBtn.disabled = true;
            bulkBtn.style.opacity = '0.5';
        }
    }

    async function saveRow(row, koValue) {
        const key = row.dataset.key;
        updateStatusDot(row, 'saving', '저장 중...');

        try {
            const response = await fetch(URLS.save, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({
                    ns: NS,
                    key: key,
                    newValue: koValue,
                }),
            });

            const data = await response.json();

            if (response.ok && data.ok) {
                updateStatusDot(row, 'saved', '저장됨');
                dirtyRows.delete(key);
                updateDirtyCount();
                // Update original value
                row.querySelector('.ko-text').dataset.original = koValue;
            } else {
                const errorMsg = data.error || '저장 실패';
                const diff = data.diff ? ' (' + data.diff.join(', ') + ')' : '';
                updateStatusDot(row, 'error', errorMsg + diff);
            }
        } catch (error) {
            updateStatusDot(row, 'error', '네트워크 오류: ' + error.message);
        }
    }

    // Event listeners
    document.querySelectorAll('.ko-text').forEach(textarea => {
        const row = textarea.closest('tr');
        const enText = row.querySelector('.en-text').value;

        // Input event: live placeholder validation
        textarea.addEventListener('input', function() {
            const koValue = this.value.trim();
            const isEmpty = koValue === '';
            const match = isEmpty ? false : comparePlaceholders(enText, koValue);

            updateBadge(row, match, isEmpty);

            // Update border color
            if (isEmpty) {
                this.style.border = '1px solid #6b7280';
            } else if (match) {
                this.style.border = '2px solid #4ade80';
            } else {
                this.style.border = '2px solid #ef4444';
            }

            // Mark as dirty if changed from original
            const original = this.dataset.original;
            if (koValue !== original) {
                dirtyRows.add(row.dataset.key);
                updateStatusDot(row, 'initial', '저장 대기');
            } else {
                dirtyRows.delete(row.dataset.key);
            }
            updateDirtyCount();
        });

        // Blur event: save
        textarea.addEventListener('blur', function() {
            const koValue = this.value.trim();
            const original = this.dataset.original;

            if (koValue !== original && koValue !== '') {
                saveRow(row, koValue);
            }
        });
    });

    // Bulk save button
    document.getElementById('bulkSaveBtn').addEventListener('click', async function() {
        const keys = Array.from(dirtyRows);
        if (keys.length === 0) return;

        this.disabled = true;
        this.textContent = '저장 중...';

        for (const key of keys) {
            const row = document.querySelector(`tr[data-key="${key}"]`);
            if (row) {
                const koText = row.querySelector('.ko-text');
                await saveRow(row, koText.value.trim());
            }
        }

        this.disabled = false;
        this.textContent = '일괄 저장 (0)';
    });

    // Commit button
    document.getElementById('commitBtn').addEventListener('click', function() {
        document.getElementById('commitModal').style.display = 'flex';
    });

    document.getElementById('closeModalBtn').addEventListener('click', function() {
        document.getElementById('commitModal').style.display = 'none';
    });

    // Close modal on background click
    document.getElementById('commitModal').addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });
    </script>
@endsection
