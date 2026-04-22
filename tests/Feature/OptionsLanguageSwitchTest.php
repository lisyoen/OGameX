<?php

namespace Tests\Feature;

use OGame\Services\PlayerService;
use Tests\AccountTestCase;

/**
 * Test Options page language switching functionality.
 */
class OptionsLanguageSwitchTest extends AccountTestCase
{
    /**
     * Test that language dropdown exists and shows supported locales.
     */
    public function testLanguageDropdownExistsAndShowsSupportedLocales(): void
    {
        $response = $this->get('/options');
        $response->assertStatus(200);

        // Check that language select exists
        $response->assertSee('name="language"', false);

        // Check that supported locales are present in the dropdown
        $supportedLocales = config('app.supported_locales');
        foreach ($supportedLocales as $code => $label) {
            $response->assertSee('value="' . $code . '"', false);
            $response->assertSee($label);
        }

        // Check that current locale is selected
        $currentLocale = app()->getLocale();
        $response->assertSee('value="' . $currentLocale . '" selected', false);
    }

    /**
     * Test that changing language from 'en' to 'ko' updates user.lang and session.
     */
    public function testChangeLanguageFromEnToKo(): void
    {
        $playerService = resolve(PlayerService::class, ['player_id' => $this->currentUserId]);

        // Ensure user starts with 'en'
        $user = $playerService->getUser();
        $user->lang = 'en';
        $user->save();

        // Reload to confirm
        $this->reloadApplication();
        $playerService = resolve(PlayerService::class, ['player_id' => $this->currentUserId]);
        $this->assertEquals('en', $playerService->getUser()->lang);

        // Post language change to 'ko'
        $response = $this->post('/options', [
            'language' => 'ko',
            '_token' => csrf_token(),
        ]);

        $response->assertRedirect('/options');
        $response->assertSessionHas('success');

        // Reload application
        $this->reloadApplication();

        // Verify that user.lang was updated to 'ko'
        $playerService = resolve(PlayerService::class, ['player_id' => $this->currentUserId]);
        $this->assertEquals('ko', $playerService->getUser()->lang);
    }

    /**
     * Test that posting an unsupported language does not change user.lang.
     */
    public function testPostUnsupportedLanguageDoesNotChangeUserLang(): void
    {
        $playerService = resolve(PlayerService::class, ['player_id' => $this->currentUserId]);

        // Set user language to 'en'
        $user = $playerService->getUser();
        $user->lang = 'en';
        $user->save();

        $this->reloadApplication();
        $playerService = resolve(PlayerService::class, ['player_id' => $this->currentUserId]);
        $this->assertEquals('en', $playerService->getUser()->lang);

        // Attempt to post unsupported language 'ja'
        $response = $this->post('/options', [
            'language' => 'ja',
            '_token' => csrf_token(),
        ]);

        $response->assertRedirect('/options');
        // Should have an error (validation failure or error message)
        $response->assertSessionHas('error');

        // Reload application
        $this->reloadApplication();

        // Verify that user.lang remains 'en'
        $playerService = resolve(PlayerService::class, ['player_id' => $this->currentUserId]);
        $this->assertEquals('en', $playerService->getUser()->lang);

        // Verify session locale did not change
        $this->assertNotEquals('ja', session('locale'));
    }

    /**
     * Test that unauthenticated users cannot access options page.
     */
    public function testUnauthenticatedUserCannotAccessOptionsPage(): void
    {
        // Logout current user
        auth()->logout();

        $response = $this->get('/options');

        // Should redirect to login
        $response->assertRedirect('/login');
    }
}
