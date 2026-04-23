@extends('ingame.layouts.main')

@section('content')
    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>@lang('Administrator Portal')</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>@lang('Administrator Portal')</h2>
            </div>
            <div class="content">
                <p class="box_highlight textCenter">
                    @lang('Select a management feature below.')
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
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">@lang('Translations')</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            @lang('Edit i18n translation files (en/ko).')
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
                            <div style="font-size: 15px; font-weight: bold; color: #f48406;">@lang('User Management')</div>
                            <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                                @lang('View users, grant/revoke admin role.')
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
                        " title="@lang('Coming in next release')">
                            <div style="font-size: 32px; margin-bottom: 8px;">👥</div>
                            <div style="font-size: 15px; font-weight: bold; color: #888;">@lang('User Management')</div>
                            <div style="font-size: 12px; color: #888; margin-top: 4px;">
                                @lang('Coming soon')
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
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">@lang('Developer Shortcuts')</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            @lang('Resource cheats, impersonation, debug tools.')
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
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">@lang('Server Settings')</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            @lang('Universe name, speeds, basic income.')
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
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">@lang('Fleet Timing')</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            @lang('Fast-forward or reduce fleet mission time.')
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
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">@lang('Rules & Legal')</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            @lang('Game rules, terms, privacy policy.')
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
                        <div style="font-size: 15px; font-weight: bold; color: #f48406;">@lang('Server Administration')</div>
                        <div style="font-size: 12px; color: #b0c4de; margin-top: 4px;">
                            @lang('Multi-account detection, bans, cache.')
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
