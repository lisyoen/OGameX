<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use OGame\Models\User;
use Tests\TestCase;

/**
 * Test locale resolution logic across the middleware and controller layers.
 *
 * Priority order verified:
 * 1. Authenticated user's users.lang DB column
 * 2. Session 'locale' key
 * 3. Accept-Language HTTP header
 * 4. config/app.fallback_locale
 */
class LocaleResolutionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test 1: Guest with Accept-Language: ko → locale should be 'ko'
     */
    public function testGuestWithAcceptLanguageKo(): void
    {
        $response = $this->get('/', ['Accept-Language' => 'ko']);
        $this->assertEquals('ko', app()->getLocale());
    }

    /**
     * Test 2: Guest with Accept-Language: en-US,en;q=0.9 → locale should be 'en'
     */
    public function testGuestWithAcceptLanguageEn(): void
    {
        $response = $this->get('/', ['Accept-Language' => 'en-US,en;q=0.9']);
        $this->assertEquals('en', app()->getLocale());
    }

    /**
     * Test 3: Guest with Accept-Language: ja (unsupported) → fallback to 'en'
     */
    public function testGuestWithUnsupportedAcceptLanguage(): void
    {
        $response = $this->get('/', ['Accept-Language' => 'ja']);
        $this->assertEquals('en', app()->getLocale());
    }

    /**
     * Test 4: Session locale=ko + Accept-Language: en → 'ko' (session wins)
     */
    public function testSessionOverridesAcceptLanguage(): void
    {
        // Set session locale
        session(['locale' => 'ko']);

        $response = $this->get('/', ['Accept-Language' => 'en']);
        $this->assertEquals('ko', app()->getLocale());
    }

    /**
     * Test 5: Authenticated user with users.lang='ko' + session locale=en + Accept-Language: en
     * → 'ko' (user DB has highest priority)
     */
    public function testUserDbOverridesSessionAndAcceptLanguage(): void
    {
        // Create a test user with lang='ko'
        $user = User::create([
            'username' => 'testuser_' . Str::random(8),
            'email' => 'test_' . Str::random(8) . '@example.com',
            'password' => Hash::make('password'),
            'lang' => 'ko',
        ]);

        // Set session to 'en'
        session(['locale' => 'en']);

        // Act as the user and make a request
        $response = $this->actingAs($user)->get('/', ['Accept-Language' => 'en']);

        $this->assertEquals('ko', app()->getLocale());
    }

    /**
     * Test 6: switchLang('ko') persists to both session and authenticated user's DB
     */
    public function testSwitchLangPersistsToSessionAndDb(): void
    {
        // Create a test user with default lang='en'
        $user = User::create([
            'username' => 'testuser_' . Str::random(8),
            'email' => 'test_' . Str::random(8) . '@example.com',
            'password' => Hash::make('password'),
            'lang' => 'en',
        ]);

        // Act as the user and switch language to 'ko'
        $response = $this->actingAs($user)->get('/lang/ko');

        // Should redirect back
        $response->assertRedirect();

        // Verify session was updated
        $this->assertEquals('ko', session('locale'));

        // Verify DB was updated
        $user->refresh();
        $this->assertEquals('ko', $user->lang);
    }

    /**
     * Test 7: switchLang with unsupported locale falls back to config default
     */
    public function testSwitchLangUnsupportedLocaleFallback(): void
    {
        $user = User::create([
            'username' => 'testuser_' . Str::random(8),
            'email' => 'test_' . Str::random(8) . '@example.com',
            'password' => Hash::make('password'),
            'lang' => 'ko',
        ]);

        // Try to switch to unsupported 'ja'
        $response = $this->actingAs($user)->get('/lang/ja');

        // Should fallback to 'en'
        $this->assertEquals('en', session('locale'));

        $user->refresh();
        $this->assertEquals('en', $user->lang);
    }
}
