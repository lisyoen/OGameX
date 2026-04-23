@extends('ingame.layouts.main')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>@lang('User Details')</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>@lang('User Details')</h2>
            </div>
            <div class="content">
                <p class="box_highlight textCenter">
                    <a href="{{ route('admin.users.index') }}" class="btn_blue">@lang('← Back to User List')</a>
                </p>

                {{-- Account Information --}}
                <div class="group bborder" style="display: block; margin-bottom: 20px;">
                    <h3 style="color: #f48406; margin-bottom: 10px;">@lang('Account Information')</h3>

                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('User ID:')</label>
                        <div class="thefield">{{ $user->id }}</div>
                    </div>

                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('Email:')</label>
                        <div class="thefield">{{ $user->email }}</div>
                    </div>

                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('Username:')</label>
                        <div class="thefield">{{ $user->username }}</div>
                    </div>

                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('Registered:')</label>
                        <div class="thefield">{{ $user->created_at ? $user->created_at->format('Y-m-d H:i:s') : '-' }}</div>
                    </div>

                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('Last Login:')</label>
                        <div class="thefield">{{ $user->time ? \Carbon\Carbon::parse($user->time)->format('Y-m-d H:i:s') : '-' }}</div>
                    </div>

                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('Language:')</label>
                        <div class="thefield">{{ strtoupper($user->lang) }}</div>
                    </div>

                    @if(isset($user->vacation_mode))
                        <div class="fieldwrapper">
                            <label class="styled textBeefy">@lang('Vacation Mode:')</label>
                            <div class="thefield">
                                @if($user->vacation_mode)
                                    <span class="status_abbr_active">@lang('Active')</span>
                                    @if($user->vacation_mode_until)
                                        (@lang('until') {{ $user->vacation_mode_until->format('Y-m-d H:i') }})
                                    @endif
                                @else
                                    <span style="color: #888;">@lang('Inactive')</span>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Admin Role Management --}}
                <div class="group bborder" style="display: block; margin-bottom: 20px;">
                    <h3 style="color: #f48406; margin-bottom: 10px;">@lang('Admin Role Management')</h3>

                    <div class="fieldwrapper">
                        <label class="styled textBeefy">@lang('Current Status:')</label>
                        <div class="thefield">
                            @if($user->hasRole('admin'))
                                <span class="status_abbr_active" style="background: #f48406; padding: 4px 8px; border-radius: 3px;">@lang('HAS ADMIN ROLE')</span>
                            @else
                                <span style="color: #888;">@lang('No admin role')</span>
                            @endif
                        </div>
                    </div>

                    @if(Auth::id() === $user->id)
                        <p class="box_highlight textCenter" style="background: #4a3434; border: 1px solid #7a5454;">
                            @lang('You cannot modify your own admin role.')
                        </p>
                    @else
                        <div class="fieldwrapper">
                            <label class="styled textBeefy">@lang('Action:')</label>
                            <div class="thefield">
                                <button
                                    id="toggle-admin-role"
                                    class="btn_blue"
                                    data-url="{{ route('admin.users.role', $user->id) }}"
                                    data-grant="{{ $user->hasRole('admin') ? '0' : '1' }}"
                                >
                                    @if($user->hasRole('admin'))
                                        @lang('Revoke Admin Role')
                                    @else
                                        @lang('Grant Admin Role')
                                    @endif
                                </button>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Planets --}}
                <div class="group bborder" style="display: block;">
                    <h3 style="color: #f48406; margin-bottom: 10px;">@lang('Planets') ({{ $planets->count() }})</h3>

                    @if($planets->count() > 0)
                        <table class="table544" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>@lang('ID')</th>
                                    <th>@lang('Name')</th>
                                    <th>@lang('Coordinates')</th>
                                    <th>@lang('Metal')</th>
                                    <th>@lang('Crystal')</th>
                                    <th>@lang('Deuterium')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($planets as $planet)
                                    <tr>
                                        <td>{{ $planet->id }}</td>
                                        <td>{{ $planet->planet_name }}</td>
                                        <td>[{{ $planet->galaxy }}:{{ $planet->system }}:{{ $planet->planet }}]</td>
                                        <td>{{ number_format($planet->metal) }}</td>
                                        <td>{{ number_format($planet->crystal) }}</td>
                                        <td>{{ number_format($planet->deuterium) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="textCenter" style="color: #888;">@lang('No planets found for this user.')</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if(Auth::id() !== $user->id)
        <script>
        (function () {
            const btn = document.getElementById('toggle-admin-role');
            if (!btn) return;

            btn.addEventListener('click', async (e) => {
                e.preventDefault();

                const grant = btn.dataset.grant === '1';
                const confirmMsg = grant
                    ? '@lang('Are you sure you want to grant admin role to this user?')'
                    : '@lang('Are you sure you want to revoke admin role from this user?')';

                if (!confirm(confirmMsg)) {
                    return;
                }

                btn.disabled = true;
                btn.textContent = '@lang('Processing...')';

                try {
                    const res = await fetch(btn.dataset.url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({ role: 'admin', grant: grant }),
                    });

                    const data = await res.json().catch(() => ({}));

                    if (!res.ok || !data.ok) {
                        alert('@lang('Role change failed:') ' + (data.error || res.status));
                        btn.disabled = false;
                        btn.textContent = grant ? '@lang('Grant Admin Role')' : '@lang('Revoke Admin Role')';
                        return;
                    }

                    // Success - reload page to show updated status
                    location.reload();
                } catch (error) {
                    alert('@lang('Network error. Please try again.')');
                    btn.disabled = false;
                    btn.textContent = grant ? '@lang('Grant Admin Role')' : '@lang('Revoke Admin Role')';
                }
            });
        })();
        </script>
    @endif
@endsection
