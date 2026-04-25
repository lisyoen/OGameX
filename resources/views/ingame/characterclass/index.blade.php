@extends('ingame.layouts.main')

@section('content')

    <div id="characterclassselectioncomponent" class="maincontent">
        <div id="characterclassselection">
            <div id="inhalt">
                <div class="header small" id="planet">
                    <h2>{{ __('t_ingame.characterclass.page_title') }}</h2>
                </div>
                <div class="c-left shortCorner"></div>
                <div class="c-right shortCorner"></div>
                <div class="boxWrapper">
                    <div class="header">
                    </div>
                    <div class="content">
                        <h2>{{ __('t_ingame.characterclass.choose_class_title') }}</h2>
                        <p>{{ __('t_ingame.characterclass.choose_class_desc') }}</p>
                        <div class="characterclass boxes">
                            @foreach($classes as $class)
                                <div class="characterclass box {{ $currentClass && $currentClass->value === $class->value ? 'selected' : '' }}"
                                     data-character-class-id="{{ $class->value }}"
                                     data-character-class-name="{{ $class->getName() }}"
                                     data-character-class-price="{{ $changeCost }}">
                                    <div class="buttons">
                                        @if($currentClass && $currentClass->value === $class->value)
                                            <a class="deactivate-it deactivate" href="javascript:void(0);" onclick="deselectCharacterClass()">
                                                <span>{{ __('t_ingame.characterclass.deactivate') }}</span>
                                            </a>
                                        @else
                                            @if($isFreeSelection)
                                                <a class="build-it" href="javascript:void(0);" onclick="selectCharacterClass({{ $class->value }}, '{{ $class->getName() }}', {{ $changeCost }})">
                                                    <span>{{ __('t_ingame.characterclass.select_for_free') }}</span>
                                                </a>
                                            @elseif($darkMatter >= $changeCost)
                                                <a class="build-it" href="javascript:void(0);" onclick="selectCharacterClass({{ $class->value }}, '{{ $class->getName() }}', {{ $changeCost }})">
                                                    <span>{{ __('t_ingame.characterclass.buy_for') }}<br>{{ number_format($changeCost, 0, ',', '.') }} DM</span>
                                                </a>
                                            @else
                                                <a class="build-it_disabled nodarkmatter" href="/premium">
                                                    <span>{{ __('t_ingame.characterclass.buy_for') }}<br>{{ number_format($changeCost, 0, ',', '.') }} DM</span>
                                                </a>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="sprite characterclass large {{ $class->getMachineName() }}"></div>
                                    <div class="boxClassBoni">
                                        <h2>{{ $class->getName() }}</h2>
                                        <ul>
                                            @foreach($class->getBonuses() as $bonus)
                                                <li class="characterclass bonus">{{ $bonus }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="shipinfo">
                                        <span>{{ $class->getClassShipName() }}</span>
                                        <div class="shipdescription">{{ $class->getShipDescription() }}</div>
                                        <div class="sprite ship small ship{{ $class->getClassShipId() }}"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                    </div>
                    <div class="footer"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function selectCharacterClass(classId, className, price) {
            let message = '';
            @if($isFreeSelection)
                message = '{{ __('t_ingame.characterclass.activate_free_confirm') }}'.replace(':className', className);
            @else
                message = '{{ __('t_ingame.characterclass.activate_paid_confirm') }}'.replace(':className', className).replace(':price', price.toLocaleString());
            @endif

            errorBoxDecision(
                '{{ __('t_ingame.characterclass.select_title') }}',
                message,
                '{{ __('t_ingame.characterclass.confirm') }}',
                '{{ __('t_ingame.characterclass.cancel') }}',
                function() {
                    fetch('{{ route('characterclass.select') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            characterClassId: classId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            fadeBox('{{ __('t_ingame.characterclass.selected_success') }}', false);
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } else if (data.lackingDM) {
                            errorBoxDecision(
                                '{{ __('t_ingame.characterclass.not_enough_dm_title') }}',
                                '{{ __('t_ingame.characterclass.not_enough_dm_desc') }}',
                                '{{ __('t_ingame.characterclass.buy_dm') }}',
                                '{{ __('t_ingame.characterclass.cancel') }}',
                                function() {
                                    window.location.href = '/premium';
                                }
                            );
                        } else {
                            fadeBox(data.message, true);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        fadeBox('{{ __('t_ingame.characterclass.error_occurred') }}', true);
                    });
                }
            );
        }

        function deselectCharacterClass() {
            errorBoxDecision(
                '{{ __('t_ingame.characterclass.deactivate_title') }}',
                '{{ __('t_ingame.characterclass.deactivate_confirm', ['cost' => number_format($changeCost, 0, ',', '.')]) }}',
                '{{ __('t_ingame.characterclass.deactivate') }}',
                '{{ __('t_ingame.characterclass.cancel') }}',
                function() {
                    fetch('{{ route('characterclass.deselect') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            fadeBox('{{ __('t_ingame.characterclass.deactivated_success') }}', false);
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } else {
                            fadeBox(data.message, true);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        fadeBox('{{ __('t_ingame.characterclass.error_occurred') }}', true);
                    });
                }
            );
        }
    </script>

@endsection
