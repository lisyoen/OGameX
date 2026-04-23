@extends('ingame.layouts.main')

@section('content')
    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>@lang('User Management')</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>@lang('User Management')</h2>
            </div>
            <div class="content">
                <p class="box_highlight textCenter">
                    @lang('Manage users, view details, and grant/revoke admin roles.')
                </p>

                {{-- Search Form --}}
                <form method="GET" action="{{ route('admin.users.index') }}" style="margin-bottom: 20px;">
                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('Search by email or username:')</label>
                        <div class="thefield">
                            <input type="text" name="q" value="{{ $q }}" class="textInput w300" placeholder="@lang('Enter email or username')">
                            <input type="hidden" name="sort" value="{{ $sort }}">
                            <input type="hidden" name="dir" value="{{ $dir }}">
                            <button type="submit" class="btn_blue">@lang('Search')</button>
                            @if($q)
                                <a href="{{ route('admin.users.index') }}" class="btn">@lang('Clear')</a>
                            @endif
                        </div>
                    </div>
                </form>

                {{-- Users Table --}}
                <table class="table544" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>
                                <a href="{{ route('admin.users.index', ['q' => $q, 'sort' => 'id', 'dir' => $sort === 'id' && $dir === 'asc' ? 'desc' : 'asc']) }}">
                                    @lang('ID')
                                    @if($sort === 'id')
                                        {{ $dir === 'asc' ? '▲' : '▼' }}
                                    @endif
                                </a>
                            </th>
                            <th>@lang('Email')</th>
                            <th>@lang('Username')</th>
                            <th>
                                <a href="{{ route('admin.users.index', ['q' => $q, 'sort' => 'created_at', 'dir' => $sort === 'created_at' && $dir === 'asc' ? 'desc' : 'asc']) }}">
                                    @lang('Registered')
                                    @if($sort === 'created_at')
                                        {{ $dir === 'asc' ? '▲' : '▼' }}
                                    @endif
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('admin.users.index', ['q' => $q, 'sort' => 'time', 'dir' => $sort === 'time' && $dir === 'asc' ? 'desc' : 'asc']) }}">
                                    @lang('Last Login')
                                    @if($sort === 'time')
                                        {{ $dir === 'asc' ? '▲' : '▼' }}
                                    @endif
                                </a>
                            </th>
                            <th>@lang('Roles')</th>
                            <th>@lang('Actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->created_at ? $user->created_at->format('Y-m-d H:i') : '-' }}</td>
                                <td>{{ $user->time ? \Carbon\Carbon::parse($user->time)->format('Y-m-d H:i') : '-' }}</td>
                                <td>
                                    @if($user->hasRole('admin'))
                                        <span class="status_abbr_active" style="background: #f48406; padding: 2px 6px; border-radius: 3px;">ADMIN</span>
                                    @else
                                        <span style="color: #888;">-</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn_blue">@lang('View')</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="textCenter">
                                    @if($q)
                                        @lang('No users found matching your search.')
                                    @else
                                        @lang('No users found.')
                                    @endif
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Pagination --}}
                <div style="margin-top: 20px;">
                    {{ $users->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
