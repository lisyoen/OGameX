@extends('ingame.layouts.main')

@section('content')
    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>{{ __('t_ingame.admin.home.title') }}</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>{{ __('t_ingame.admin.home.title') }}</h2>
            </div>
            <div class="content">
                <p class="box_highlight textCenter">
                    {{ __('t_ingame.admin.home.select_feature') }}
                </p>

                <div class="admin-portal-grid" style="
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                    gap: 16px;
                    padding: 16px;
                ">
                    {{-- Translations --}}
                    <a href="{{ route('admin.translations.index') }}" class="admin-portal-card" style="
                        display: block;
                        background: #2a3d52;
                        border: 1px solid #415a77;
                        border-radius: 6px;
                        padding: 20px;
                        text-decoration: none;
                        color: #fff;
                        transition: background 0.2s;
                    " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                        <div style="font-size: 32px; margin-bottom: 8px;">🌐</div>
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">{{ __('t_ingame.admin.home.translations_title') }}</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            {{ __('t_ingame.admin.home.translations_desc') }}
                        </div>
                    </a>

                    {{-- User Management (placeholder — coming in directive 028) --}}
                    @if(Route::has('admin.users.index'))
                        <a href="{{ route('admin.users.index') }}" class="admin-portal-card" style="
                            display: block;
                            background: #2a3d52;
                            border: 1px solid #415a77;
                            border-radius: 6px;
                            padding: 20px;
                            text-decoration: none;
                            color: #fff;
                            transition: background 0.2s;
                        " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                            <div style="font-size: 32px; margin-bottom: 8px;">👥</div>
                            <div style="font-size: 15px; font-weight: bold; color: #f48406;">{{ __('t_ingame.admin.home.user_management_title') }}</div>
                            <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                                {{ __('t_ingame.admin.home.user_management_desc') }}
                            </div>
                        </a>
                    @else
                        <div class="admin-portal-card" style="
                            display: block;
                            background: #2a3d52;
                            border: 1px solid #415a77;
                            border-radius: 6px;
                            padding: 20px;
                            color: #888;
                            opacity: 0.5;
                            cursor: not-allowed;
                        " title="{{ __('t_ingame.admin.home.coming_next_release') }}">
                            <div style="font-size: 32px; margin-bottom: 8px;">👥</div>
                            <div style="font-size: 15px; font-weight: bold; color: #888;">{{ __('t_ingame.admin.home.user_management_title') }}</div>
                            <div style="font-size: 12px; color: #888; margin-top: 4px;">
                                {{ __('t_ingame.admin.home.coming_soon') }}
                            </div>
                        </div>
                    @endif

                    {{-- Developer Shortcuts --}}
                    <a href="{{ route('admin.developershortcuts.index') }}" class="admin-portal-card" style="
                        display: block;
                        background: #2a3d52;
                        border: 1px solid #415a77;
                        border-radius: 6px;
                        padding: 20px;
                        text-decoration: none;
                        color: #fff;
                        transition: background 0.2s;
                    " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                        <div style="font-size: 32px; margin-bottom: 8px;">⚙️</div>
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">{{ __('t_ingame.admin.home.developer_shortcuts_title') }}</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            {{ __('t_ingame.admin.home.developer_shortcuts_desc') }}
                        </div>
                    </a>

                    {{-- Server Settings --}}
                    <a href="{{ route('admin.serversettings.index') }}" class="admin-portal-card" style="
                        display: block;
                        background: #2a3d52;
                        border: 1px solid #415a77;
                        border-radius: 6px;
                        padding: 20px;
                        text-decoration: none;
                        color: #fff;
                        transition: background 0.2s;
                    " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                        <div style="font-size: 32px; margin-bottom: 8px;">🌌</div>
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">{{ __('t_ingame.admin.home.server_settings_title') }}</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            {{ __('t_ingame.admin.home.server_settings_desc') }}
                        </div>
                    </a>

                    {{-- Fleet Timing --}}
                    <a href="{{ route('admin.fleettiming.index') }}" class="admin-portal-card" style="
                        display: block;
                        background: #2a3d52;
                        border: 1px solid #415a77;
                        border-radius: 6px;
                        padding: 20px;
                        text-decoration: none;
                        color: #fff;
                        transition: background 0.2s;
                    " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                        <div style="font-size: 32px; margin-bottom: 8px;">🚀</div>
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">{{ __('t_ingame.admin.home.fleet_timing_title') }}</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            {{ __('t_ingame.admin.home.fleet_timing_desc') }}
                        </div>
                    </a>

                    {{-- Rules & Legal --}}
                    <a href="{{ route('admin.rules.index') }}" class="admin-portal-card" style="
                        display: block;
                        background: #2a3d52;
                        border: 1px solid #415a77;
                        border-radius: 6px;
                        padding: 20px;
                        text-decoration: none;
                        color: #fff;
                        transition: background 0.2s;
                    " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                        <div style="font-size: 32px; margin-bottom: 8px;">📜</div>
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">{{ __('t_ingame.admin.home.rules_legal_title') }}</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            {{ __('t_ingame.admin.home.rules_legal_desc') }}
                        </div>
                    </a>

                    {{-- Server Administration --}}
                    <a href="{{ route('admin.server-administration.index') }}" class="admin-portal-card" style="
                        display: block;
                        background: #2a3d52;
                        border: 1px solid #415a77;
                        border-radius: 6px;
                        padding: 20px;
                        text-decoration: none;
                        color: #fff;
                        transition: background 0.2s;
                    " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                        <div style="font-size: 32px; margin-bottom: 8px;">🛡️</div>
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">{{ __('t_ingame.admin.home.server_administration_title') }}</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            {{ __('t_ingame.admin.home.server_administration_desc') }}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
