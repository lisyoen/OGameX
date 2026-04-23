@extends('ingame.layouts.main')

@section('content')
    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>번역 관리</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>번역 관리</h2>
            </div>
            <div class="content">
                <p class="box_highlight textCenter">
                    네임스페이스를 선택하여 en/ko 번역을 편집하세요.
                </p>

                {{-- Summary Stats --}}
                @php
                    $totalKeys = 0;
                    $totalOk = 0;
                    $totalUntranslated = 0;
                    $totalMismatch = 0;
                    foreach ($namespaces as $ns) {
                        $totalKeys += $ns['key_count'];
                        $totalOk += $ns['counts']['ok'];
                        $totalUntranslated += $ns['counts']['untranslated'] + $ns['counts']['missing_ko'];
                        $totalMismatch += $ns['counts']['placeholder_mismatch'];
                    }
                @endphp

                <div style="margin: 20px 0; padding: 16px; background: #1e2a3a; border: 1px solid #415a77; border-radius: 6px;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 16px;">
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">전체 NS</div>
                            <div style="font-size: 20px; font-weight: bold; color: #fff;">{{ count($namespaces) }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">전체 키</div>
                            <div style="font-size: 20px; font-weight: bold; color: #fff;">{{ number_format($totalKeys) }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">번역 완료</div>
                            <div style="font-size: 20px; font-weight: bold; color: #4ade80;">{{ number_format($totalOk) }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">미번역</div>
                            <div style="font-size: 20px; font-weight: bold; color: #fb923c;">{{ number_format($totalUntranslated) }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: #b0c4de;">placeholder 불일치</div>
                            <div style="font-size: 20px; font-weight: bold; color: #ef4444;">{{ number_format($totalMismatch) }}</div>
                        </div>
                    </div>
                </div>

                {{-- Namespace Cards --}}
                <div style="
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                    gap: 16px;
                    margin-top: 20px;
                ">
                    @foreach($namespaces as $ns)
                        @php
                            $totalCount = $ns['key_count'];
                            $okCount = $ns['counts']['ok'];
                            $translationRate = $totalCount > 0 ? round(($okCount / $totalCount) * 100, 1) : 0;
                            $mismatchCount = $ns['counts']['placeholder_mismatch'];
                        @endphp
                        <a href="{{ route('admin.translations.show', ['ns' => $ns['name']]) }}" style="
                            display: block;
                            background: #2a3d52;
                            border: 1px solid #415a77;
                            border-radius: 6px;
                            padding: 20px;
                            text-decoration: none;
                            color: #fff;
                            transition: background 0.2s;
                        " onmouseover="this.style.background='#38516f'" onmouseout="this.style.background='#2a3d52'">
                            <div style="font-size: 16px; font-weight: bold; color: #f48406; margin-bottom: 12px; font-family: monospace;">
                                {{ $ns['name'] }}
                            </div>
                            <div style="font-size: 13px; color: #b0c4de; margin-bottom: 8px;">
                                전체 키: <strong>{{ number_format($totalCount) }}</strong>
                            </div>
                            <div style="margin-bottom: 8px;">
                                <div style="font-size: 12px; color: #b0c4de; margin-bottom: 4px;">
                                    ko 번역률: <strong>{{ $translationRate }}%</strong>
                                </div>
                                <div style="background: #1e2a3a; border-radius: 4px; height: 8px; overflow: hidden;">
                                    <div style="background: #4ade80; height: 100%; width: {{ $translationRate }}%;"></div>
                                </div>
                            </div>
                            <div>
                                @if($mismatchCount === 0)
                                    <span style="background: #4ade80; color: #000; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: bold;">
                                        placeholder OK
                                    </span>
                                @else
                                    <span style="background: #ef4444; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: bold;">
                                        mismatch: {{ $mismatchCount }}
                                    </span>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
