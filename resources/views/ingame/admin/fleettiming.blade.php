@extends('ingame.layouts.main')

@section('content')

    @if (session('success'))
        <script>fadeBox('{{ session('success') }}', false);</script>
    @endif

    <style>
        .mission-badge {
            border-radius: 3px;
            padding: 1px 5px;
            font-size: 11px;
            white-space: nowrap;
        }
    </style>

    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>{{ __('t_ingame.admin.fleet_timing.title') }}</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>{{ __('t_ingame.admin.fleet_timing.title') }}</h2>
            </div>
            <div class="content">
                <div class="buddylistContent" style="margin-bottom: 60px;">

                    {{-- ── HEADER BAR ─────────────────────────────────────────── --}}
                    <p class="box_highlight textCenter no_buddies">
                        {{ __('t_ingame.admin.fleet_timing.active_missions') }}: <strong>{{ $missions->total() }}</strong>
                        &nbsp;|&nbsp;
                        {{ __('t_ingame.admin.fleet_timing.server_time') }}: <strong id="server-clock" style="font-family: monospace;"></strong>
                        &nbsp;
                        <button onclick="location.reload()" class="btn_blue" style="font-size: 11px; padding: 2px 8px;">{{ __('t_ingame.admin.fleet_timing.refresh') }}</button>
                    </p>

                    {{-- ── FILTER BAR ─────────────────────────────────────────── --}}
                    <p class="box_highlight textCenter no_buddies">{{ __('t_ingame.admin.fleet_timing.filter_by_player') }}</p>
                    <form method="GET" action="{{ route('admin.fleettiming.index') }}" id="filter-form">
                        <datalist id="player-datalist">
                            @foreach ($allUsers as $uid => $uname)
                                <option value="{{ $uname }} (#{{ $uid }})"></option>
                            @endforeach
                        </datalist>
                        <input type="hidden" name="user_id" id="player-user-id" value="{{ $filterUserId ?? '' }}">
                        <div class="group bborder" style="display: block;">
                            <div class="fieldwrapper">
                                <label class="styled textBeefy">
                                    {{ __('t_ingame.admin.fleet_timing.player') }} <span style="color: #aaa; font-weight: normal;">({{ $allUsers->count() }} {{ __('t_ingame.admin.fleet_timing.active') }})</span>:
                                </label>
                                <div class="thefield">
                                    <input type="text" id="player-search"
                                           list="player-datalist"
                                           placeholder="{{ __('t_ingame.admin.fleet_timing.search') }}..."
                                           autocomplete="off"
                                           class="textInput w150 textBeefy"
                                           value="{{ $filterUserId && isset($allUsers[$filterUserId]) ? $allUsers[$filterUserId].' (#'.$filterUserId.')' : '' }}">
                                    <input type="submit" class="btn_blue" value="{{ __('t_ingame.admin.fleet_timing.go') }}">
                                    @if ($filterUserId)
                                        <a href="{{ route('admin.fleettiming.index') }}" class="btn_blue">{{ __('t_ingame.admin.fleet_timing.clear') }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="fieldwrapper">
                                <label class="styled textBeefy">{{ __('t_ingame.admin.fleet_timing.results_per_page') }}:</label>
                                <div class="thefield">
                                    <select name="per_page" class="w130"
                                            onchange="this.form.submit()">
                                        @foreach ($perPageOptions as $option)
                                            <option value="{{ $option }}" {{ $perPage === $option ? 'selected' : '' }}>
                                                {{ $option }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>

                    {{-- ── GLOBAL ACTION ───────────────────────────────────────── --}}
                    <p class="box_highlight textCenter no_buddies">{{ __('t_ingame.admin.fleet_timing.global_action') }}</p>
                    <form method="POST" action="{{ route('admin.fleettiming.fast-forward-all') }}"
                          onsubmit="return confirm('{{ __('t_ingame.admin.fleet_timing.confirm_fast_forward_all') }}')">
                        @csrf
                        @if ($filterUserId)
                            <input type="hidden" name="user_id" value="{{ $filterUserId }}">
                        @endif
                        <div class="group bborder" style="display: block;">
                            <div class="fieldwrapper">
                                <div class="smallFont">{{ __('t_ingame.admin.fleet_timing.sets_arrival_now') }}</div>
                            </div>
                            <div class="fieldwrapper" style="text-align: center;">
                                <input type="submit" class="btn_blue" style="font-weight: bold;"
                                       value="{{ $filterUserId ? __('t_ingame.admin.fleet_timing.arrive_all_this_player') : __('t_ingame.admin.fleet_timing.arrive_all_all_players') }}">
                            </div>
                        </div>
                    </form>

                    {{-- ── MISSIONS TABLE ─────────────────────────────────────── --}}
                    @if ($missions->isEmpty())
                        <p class="box_highlight textCenter no_buddies">{{ __('t_ingame.admin.fleet_timing.no_missions') }}</p>
                    @else
                        <p class="box_highlight textCenter no_buddies">{{ __('t_ingame.admin.fleet_timing.active_missions') }}</p>
                        <div style="width: 100%; overflow-x: auto;">
                            <table style="width: 100%; border-collapse: collapse; font-size: 11px; table-layout: fixed;">
                                <colgroup>
                                    <col style="width: 5%">    {{-- ID --}}
                                    <col style="width: 13%">   {{-- Player --}}
                                    <col style="width: 10%">   {{-- Type --}}
                                    <col style="width: 7%">    {{-- From --}}
                                    <col style="width: 7%">    {{-- To --}}
                                    <col style="width: 6%">    {{-- Hold --}}
                                    <col style="width: 9%">    {{-- Departure --}}
                                    <col style="width: 10%">   {{-- Arrival --}}
                                    <col style="width: 9%">    {{-- Time Left --}}
                                    <col style="width: 24%">   {{-- Actions --}}
                                </colgroup>
                                <thead>
                                    <tr style="background: #1e3040; color: #8ec8f0; border-bottom: 1px solid #2a4a6a;">
                                        <th style="padding: 4px 6px; text-align: left;">{{ __('t_ingame.admin.fleet_timing.id') }}</th>
                                        <th style="padding: 4px 6px; text-align: left;">{{ __('t_ingame.admin.fleet_timing.player') }}</th>
                                        <th style="padding: 4px 6px; text-align: left;">{{ __('t_ingame.admin.fleet_timing.type') }}</th>
                                        <th style="padding: 4px 6px; text-align: center;">{{ __('t_ingame.admin.fleet_timing.from') }}</th>
                                        <th style="padding: 4px 6px; text-align: center;">{{ __('t_ingame.admin.fleet_timing.to') }}</th>
                                        <th style="padding: 4px 6px; text-align: center;">{{ __('t_ingame.admin.fleet_timing.hold_s') }}</th>
                                        <th style="padding: 4px 6px; text-align: center;">{{ __('t_ingame.admin.fleet_timing.departure') }}</th>
                                        <th style="padding: 4px 6px; text-align: center;">{{ __('t_ingame.admin.fleet_timing.arrival') }}</th>
                                        <th style="padding: 4px 6px; text-align: center;">{{ __('t_ingame.admin.fleet_timing.time_left') }}</th>
                                        <th style="padding: 4px 6px; text-align: center;">{{ __('t_ingame.admin.fleet_timing.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($missions as $mission)
                                        @php
                                            $username    = $users[$mission->user_id] ?? __('t_ingame.admin.fleet_timing.user_id', ['id' => $mission->user_id]);
                                            $typeLabel   = $missionTypeLabels[$mission->mission_type] ?? __('t_ingame.admin.fleet_timing.type_id', ['id' => $mission->mission_type]);
                                            $timeLeft    = $mission->time_arrival - $now;
                                            $holdingDisp = $mission->time_holding ? $mission->time_holding : '—';
                                            $rowBg       = $loop->even ? '#12202e' : '#0f1c28';
                                            $isAttack    = in_array($mission->mission_type, [1, 2]);
                                            $isExped     = $mission->mission_type === 15;
                                            $badgeBg     = $isAttack ? '#4a1010' : ($isExped ? '#1a3a1a' : '#1a2a3a');
                                            $badgeColor  = $isAttack ? '#f77'    : ($isExped ? '#8f8'    : '#8ec8f0');
                                        @endphp
                                        <tr style="background: {{ $rowBg }}; border-bottom: 1px solid #1a3040;"
                                            data-arrival="{{ $mission->time_arrival }}">
                                            <td style="padding: 4px 6px; color: #8ec8f0;">{{ $mission->id }}</td>
                                            <td style="padding: 4px 6px; word-break: break-word;">
                                                <strong>{{ $username }}</strong>
                                                <span style="color: #666; font-size: 10px;">#{{ $mission->user_id }}</span>
                                            </td>
                                            <td style="padding: 4px 6px;">
                                                <span class="mission-badge"
                                                      style="background: {{ $badgeBg }}; color: {{ $badgeColor }};">
                                                    {{ $typeLabel }}
                                                </span>
                                            </td>
                                            <td style="padding: 4px 6px; text-align: center; font-family: monospace;">
                                                {{ $mission->galaxy_from }}:{{ $mission->system_from }}:{{ $mission->position_from }}
                                            </td>
                                            <td style="padding: 4px 6px; text-align: center; font-family: monospace;">
                                                {{ $mission->galaxy_to }}:{{ $mission->system_to }}:{{ $mission->position_to }}
                                            </td>
                                            <td style="padding: 4px 6px; text-align: center; color: #aaa;">{{ $holdingDisp }}</td>
                                            <td style="padding: 4px 6px; text-align: center; color: #888;">
                                                {{ date('H:i:s', $mission->time_departure) }}
                                            </td>
                                            <td style="padding: 4px 6px; text-align: center;">
                                                {{ date('H:i:s', $mission->time_arrival) }}<br>
                                                <span style="font-size: 10px; color: #666;">{{ date('d/m', $mission->time_arrival) }}</span>
                                            </td>
                                            <td style="padding: 4px 6px; text-align: center;">
                                                <span class="countdown"
                                                      data-arrival="{{ $mission->time_arrival }}"
                                                      style="font-family: monospace; font-size: 12px;
                                                             color: {{ $timeLeft <= 0 ? '#f44' : ($timeLeft <= 60 ? '#f00' : ($timeLeft <= 300 ? '#f90' : '#6cf')) }};
                                                             font-weight: {{ $timeLeft <= 60 ? 'bold' : 'normal' }};">
                                                    {{ $timeLeft > 0 ? gmdate('H:i:s', $timeLeft) : __('t_ingame.admin.fleet_timing.arrived') }}
                                                </span>
                                                @if ($mission->time_holding)
                                                    <br><span style="font-size: 10px; color: #f90;">+{{ gmdate('H:i:s', $mission->time_holding) }} {{ __('t_ingame.admin.fleet_timing.hold') }}</span>
                                                @endif
                                            </td>
                                            <td style="padding: 4px 6px; overflow: visible; white-space: normal;">
                                                <div style="display: flex; flex-direction: column; gap: 4px; align-items: flex-start;">
                                                    {{-- Arrive Now --}}
                                                    <form method="POST" action="{{ route('admin.fleettiming.fast-forward') }}"
                                                          style="display: flex; align-items: center; gap: 3px;">
                                                        @csrf
                                                        <input type="hidden" name="mission_id" value="{{ $mission->id }}">
                                                        <input type="submit" class="btn_blue" value="{{ __('t_ingame.admin.fleet_timing.now') }}"
                                                               style="font-size: 10px; padding: 2px 5px;"
                                                               onclick="return confirm('{{ __('t_ingame.admin.fleet_timing.confirm_arrive_mission', ['id' => $mission->id]) }}')">
                                                    </form>
                                                    {{-- Reduce Time --}}
                                                    <form method="POST" action="{{ route('admin.fleettiming.reduce') }}"
                                                          style="display: flex; align-items: center; gap: 3px;">
                                                        @csrf
                                                        <input type="hidden" name="mission_id" value="{{ $mission->id }}">
                                                        <span style="font-size: 11px; color: #aaa;">−</span>
                                                        <input type="number" name="minutes" value="60" min="1" max="10000"
                                                               class="textInput textCenter textBeefy" style="width: 40px;">
                                                        <span style="font-size: 11px; color: #aaa;">{{ __('t_ingame.admin.fleet_timing.min') }}</span>
                                                        <input type="submit" class="btn_blue" value="{{ __('t_ingame.admin.fleet_timing.reduce') }}"
                                                               style="font-size: 10px; padding: 2px 5px;">
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- ── PAGINATION ──────────────────────────────────────── --}}
                        @if ($missions->lastPage() > 1)
                            <div class="fieldwrapper" style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px; flex-wrap: wrap; gap: 6px;">
                                <div class="smallFont">
                                    {{ __('t_ingame.admin.fleet_timing.showing_range', ['first' => $missions->firstItem(), 'last' => $missions->lastItem(), 'total' => $missions->total()]) }}
                                </div>
                                <div style="display: flex; gap: 4px; flex-wrap: wrap; align-items: center;">
                                    @if ($missions->onFirstPage())
                                        <span class="btn_blue" style="opacity: 0.4; cursor: default; font-size: 11px; padding: 2px 8px;">{{ __('t_ingame.admin.fleet_timing.previous') }}</span>
                                    @else
                                        <a href="{{ $missions->previousPageUrl() }}" class="btn_blue" style="font-size: 11px; padding: 2px 8px;">{{ __('t_ingame.admin.fleet_timing.previous') }}</a>
                                    @endif

                                    @foreach ($missions->getUrlRange(max(1, $missions->currentPage() - 2), min($missions->lastPage(), $missions->currentPage() + 2)) as $page => $url)
                                        @if ($page === $missions->currentPage())
                                            <span class="btn_blue" style="font-weight: bold; font-size: 11px; padding: 2px 8px;">{{ $page }}</span>
                                        @else
                                            <a href="{{ $url }}" class="btn_blue" style="font-size: 11px; padding: 2px 8px;">{{ $page }}</a>
                                        @endif
                                    @endforeach

                                    @if ($missions->hasMorePages())
                                        <a href="{{ $missions->nextPageUrl() }}" class="btn_blue" style="font-size: 11px; padding: 2px 8px;">{{ __('t_ingame.admin.fleet_timing.next') }}</a>
                                    @else
                                        <span class="btn_blue" style="opacity: 0.4; cursor: default; font-size: 11px; padding: 2px 8px;">{{ __('t_ingame.admin.fleet_timing.next') }}</span>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="fieldwrapper">
                                <div class="smallFont">
                                    {{ __('t_ingame.admin.fleet_timing.showing_total', ['total' => $missions->total()]) }}
                                </div>
                            </div>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </div>

<script>
(function () {
    var serverNow   = {{ $now }};
    var clientStart = Math.floor(Date.now() / 1000);

    function srvNow() {
        return serverNow + (Math.floor(Date.now() / 1000) - clientStart);
    }
    function pad(n) { return String(n).padStart(2, '0'); }
    function hms(sec) {
        if (sec <= 0) return 'ARRIVED';
        return pad(Math.floor(sec / 3600)) + ':' + pad(Math.floor((sec % 3600) / 60)) + ':' + pad(sec % 60);
    }

    function tick() {
        var t = srvNow();
        // clock
        var cl = document.getElementById('server-clock');
        if (cl) {
            var d = new Date(t * 1000);
            cl.textContent = pad(d.getHours()) + ':' + pad(d.getMinutes()) + ':' + pad(d.getSeconds());
        }
        // countdowns
        document.querySelectorAll('.countdown[data-arrival]').forEach(function (el) {
            var diff = parseInt(el.dataset.arrival, 10) - t;
            el.textContent = hms(diff);
            el.style.color      = diff <= 0 ? '#f44' : (diff <= 60 ? '#f00' : (diff <= 300 ? '#f90' : '#6cf'));
            el.style.fontWeight = diff <= 60 ? 'bold' : 'normal';
        });
    }

    setInterval(tick, 1000);
    tick();
})();

// ── Player datalist filter ───────────────────────────────────────────────────
(function () {
    var input    = document.getElementById('player-search');
    var hiddenId = document.getElementById('player-user-id');
    var form     = document.getElementById('filter-form');
    var datalist = document.getElementById('player-datalist');
    if (!input || !hiddenId || !datalist) return;

    // Build lookup: display text -> id  (text format: "Name (#N)")
    var map = {};
    Array.prototype.forEach.call(datalist.options, function (o) {
        var match = o.value.match(/#(\d+)\)$/);
        if (match) { map[o.value] = match[1]; }
    });

    input.addEventListener('change', function () {
        var uid = map[this.value] || '';
        hiddenId.value = uid;
        if (uid) { form.submit(); }
    });

    // Pressing Enter also submits if a valid player is selected
    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            var uid = map[this.value] || '';
            hiddenId.value = uid;
            form.submit();
        }
    });
})();
</script>

@endsection
