@php /** @var OGame\Services\PlayerService $currentPlayer */ @endphp
<div id="adminbar">
    <style>
        #adminbar {
            background: transparent url('/img/admin/admin-menu-bg.jpg') repeat-x;
            font: normal 11px Tahoma, Arial, Helvetica, sans-serif;
            height: 32px;
            left: 0;
            padding: 0;
            text-align: center;
            top: 0;
            width: 100%;
            z-index: 3000;
        }

        #adminbar #mmoContent {
            height: 32px;
            margin: 0 auto;
            width: 990px;
            position: relative;
        }

        #adminbar #adminLogo {
            float: left;
            display: block;
            height: 32px;
            width: auto;
            padding: 5px 10px;
            padding-left: 0;
            font-size: 14px;
            color: #f48406 !important;
            font-weight: bold;
        }

        #adminbar #adminLogo span {
            font-size: 18px;
            vertical-align: middle;
        }

        #adminbar ul {
            list-style: none;
            margin-top: 8px;
            padding: 0;
            float: right;
        }

        #adminbar ul li {
            display: inline;
            margin-right: 10px;
        }

        #adminbar ul li a {
            color: #fff;
            background-color: #333;
            padding: 3px 10px;
            text-decoration: none;
            border-radius: 3px;
            font-size: 11px;
        }

        #adminbar ul li a:hover, #adminbar ul li a.active  {
            background-color: #555;
        }
    </style>
    <div id="mmoContent">
        <div id="adminLogo">
            @if(!empty($isImpersonating))
                {{ __('Masquerading as user') }}
            @else
                {{ __('t_ingame.admin_menu.brand') }}
            @endif
        </div>
        @if(!empty($isImpersonating) && !empty($impersonateLeaveUrl))
            <ul>
                <li>
                    <a href="{{ $impersonateLeaveUrl }}" class="active">
                        {{ __('Exit masquerade') }}
                    </a>
                </li>
            </ul>
        @else
            <ul>
                <li><a class="{{(Request::is('admin') ? 'active' : '') }}" href="{{ route('admin.home') }}">{{ __('t_ingame.admin_menu.home') }}</a></li>
                @if(Route::has('admin.users.index'))
                    <li><a class="{{(Request::is('admin/users*') ? 'active' : '') }}" href="{{ route('admin.users.index') }}">{{ __('t_ingame.admin_menu.users') }}</a></li>
                @endif
                <li><a class="{{(Request::is('admin/translations*') ? 'active' : '') }}" href="{{ route('admin.translations.index') }}">{{ __('t_ingame.admin_menu.translations') }}</a></li>
                <li><a class="{{(Request::is('admin/developer-shortcuts') ? 'active' : '') }}" href="{{ route('admin.developershortcuts.index') }}">{{ __('t_ingame.admin_menu.developer_shortcuts') }}</a></li>
                <li><a class="{{(Request::is('admin/server-settings') ? 'active' : '') }}" href="{{ route('admin.serversettings.index') }}">{{ __('t_ingame.admin_menu.server_settings') }}</a></li>
                <li><a class="{{(Request::is('admin/fleet-timing*') ? 'active' : '') }}" href="{{ route('admin.fleettiming.index') }}">{{ __('t_ingame.admin_menu.fleet_timing') }}</a></li>
                <li><a class="{{(Request::is('admin/rules') ? 'active' : '') }}" href="{{ route('admin.rules.index') }}">{{ __('t_ingame.admin_menu.rules_legal') }}</a></li>
                <li><a class="{{(Request::is('admin/server-administration*') ? 'active' : '') }}" href="{{ route('admin.server-administration.index') }}">{{ __('t_ingame.admin_menu.server_administration') }}</a></li>
            </ul>
        @endif
    </div>
</div>
