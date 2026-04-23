<?php
// i18n-ko Phase 3: Full Korean translation completed on 2026-04-23

return [
    // ------------------------
    'welcome_message' => [
        'from' => 'OGameX',
        'subject' => 'OGameX에 오신 것을 환영합니다!',
        'body' => '황제 폐하 :player님께 인사드립니다!

빛나는 경력을 시작하신 것을 축하드립니다. 저는 폐하의 첫 걸음을 안내해 드리겠습니다.

왼쪽에는 은하 제국을 감독하고 통치할 수 있는 메뉴가 있습니다.

이미 개요를 보셨을 것입니다. 자원과 시설 메뉴를 통해 제국을 확장하는 데 도움이 되는 건물을 건설할 수 있습니다. 먼저 태양광 발전소를 건설하여 광산에 에너지를 공급하십시오.

그런 다음 금속 광산과 크리스탈 광산을 확장하여 필수 자원을 생산하십시오. 또는 직접 둘러보셔도 좋습니다. 곧 익숙해지실 것입니다.

더 많은 도움말, 팁 및 전략은 여기에서 찾을 수 있습니다:

Discord 채팅: Discord Server
포럼: OGameX Forum
지원: Game Support

게임의 최신 공지사항과 변경사항은 포럼에서만 확인할 수 있습니다.


이제 미래를 향한 준비가 완료되었습니다. 행운을 빕니다!

이 메시지는 7일 후에 삭제됩니다.',
    ],

    // ------------------------
    'return_of_fleet_with_resources' => [
        'from' => '함대 사령부',
        'subject' => '함대 귀환',
        'body' => '함대가 :from에서 :to로 귀환하여 화물을 인도했습니다:

금속: :metal
크리스탈: :crystal
중수소: :deuterium',
    ],

    // ------------------------
    'return_of_fleet' => [
        'from' => '함대 사령부',
        'subject' => '함대 귀환',
        'body' => '함대가 :from에서 :to로 귀환합니다.

함대는 화물을 운반하지 않았습니다.',
        ],

    // ------------------------
    'fleet_deployment_with_resources' => [
        'from' => '함대 사령부',
        'subject' => '함대 귀환',
        'body' => ':from의 함대가 :to에 도착하여 화물을 인도했습니다:

금속: :metal
크리스탈: :crystal
중수소: :deuterium',
    ],

    // ------------------------
    'fleet_deployment' => [
        'from' => '함대 사령부',
        'subject' => '함대 귀환',
        'body' => ':from의 함대가 :to에 도착했습니다. 함대는 화물을 운반하지 않았습니다.',
        ],

    // ------------------------
    'transport_arrived' => [
        'from' => '함대 사령부',
        'subject' => '행성 도착',
        'body' => ':from의 함대가 :to에 도착하여 화물을 인도했습니다:
금속: :metal 크리스탈: :crystal 중수소: :deuterium',
        ],

    // ------------------------
    'transport_received' => [
        'from' => '함대 사령부',
        'subject' => '함대 도착',
        'body' => ':from의 함대가 행성 :to에 도착하여 화물을 인도했습니다:
금속: :metal 크리스탈: :crystal 중수소: :deuterium',
    ],

    // ------------------------
    'acs_defend_arrival_host' => [
        'from' => '우주 감시',
        'subject' => '함대 정지',
        'body' => '함대가 :to에 도착했습니다.',
    ],

    // ------------------------
    'acs_defend_arrival_sender' => [
        'from' => '함대 사령부',
        'subject' => '함대 정지',
        'body' => '함대가 :to에 도착했습니다.',
    ],

    // ------------------------
    'colony_established' => [
        'from' => '함대 사령부',
        'subject' => '식민지 개척 보고',
        'body' => '함대가 지정된 좌표 :coordinates에 도착하여 새로운 행성을 발견하고 즉시 개발을 시작했습니다.',
    ],

    // ------------------------
    'colony_establish_fail_astrophysics' => [
        'from' => '개척자',
        'subject' => '식민지 개척 보고',
        'body' => '함대가 지정된 좌표 :coordinates에 도착하여 행성이 식민지화에 적합하다는 것을 확인했습니다. 그러나 행성 개발을 시작한 직후 개척자들은 천체물리학 지식이 새로운 행성의 식민지화를 완료하기에 충분하지 않다는 것을 깨달았습니다.',
    ],

    // ------------------------
    'espionage_report' => [
        'from' => '함대 사령부',
        'subject' => ':planet 첩보 리포트',
    ],

    // ------------------------
    'espionage_detected' => [
        'from' => '함대 사령부',
        'subject' => '행성 :planet 첩보 리포트',
        'body' => "행성 :planet (:attacker_name)의 외부 함대가 귀하의 행성 근처에서 목격되었습니다
:defender
역첩보 확률: :chance%",
    ],

    // ------------------------
    'battle_report' => [
        'from' => '함대 사령부',
        'subject' => '전투 리포트 :planet',
    ],

      // ------------------------
    'fleet_lost_contact' => [
        'from' => '함대 사령부',
        'subject' => '공격 함대와의 연락이 끊겼습니다. :coordinates',
        'body' => '(이는 첫 라운드에서 파괴되었음을 의미합니다.)',
    ],

    // ------------------------
    'debris_field_harvest' => [
        'from' => '함대',
        'subject' => ':coordinates 잔해 필드 수확 보고',
        'body' => '귀하의 :ship_name (:ship_amount 함선)은 총 적재 용량 :storage_capacity을 가지고 있습니다. 목표 :to에서 금속 :metal, 크리스탈 :crystal, 중수소 :deuterium이 우주 공간에 떠다니고 있습니다. 금속 :harvested_metal, 크리스탈 :harvested_crystal, 중수소 :harvested_deuterium을 수확했습니다.',
    ],

    // ------------------------
    // Expedition generic message parts
    'expedition_resources_captured' => ':resource_type :resource_amount을 획득했습니다.',
    'expedition_dark_matter_captured' => '(암흑물질 :dark_matter_amount)',
    'expedition_units_captured' => '다음 함선이 함대에 합류했습니다:',

    'expedition_unexplored_statement' => '통신사 항해일지 기록: 이 우주 영역은 아직 탐험되지 않은 것으로 보입니다.',

    // Expedition Failed
    'expedition_failed' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionFailed class.
        'body' => [
            '1' => '기함의 중앙 컴퓨터 고장으로 인해 탐험 임무가 중단되어야 했습니다. 불행히도 컴퓨터 오작동으로 인해 함대는 빈손으로 귀환합니다.',
            '2' => '탐험대가 중성자별의 중력장에 거의 진입할 뻔했고 탈출하는 데 시간이 걸렸습니다. 그로 인해 많은 중수소가 소비되었으며 탐험 함대는 아무런 성과 없이 돌아와야 했습니다.',
            '3' => '알 수 없는 이유로 탐험대의 점프가 완전히 잘못되었습니다. 거의 태양의 중심에 착륙할 뻔했습니다. 다행히 알려진 항성계에 착륙했지만 귀환 점프는 예상보다 오래 걸릴 것입니다.',
            '4' => '기함의 원자로 코어 고장으로 전체 탐험 함대가 거의 파괴될 뻔했습니다. 다행히 기술자들이 매우 유능하여 최악의 상황을 피할 수 있었습니다. 수리에 상당한 시간이 걸렸으며 탐험대는 목표를 달성하지 못한 채 귀환해야 했습니다.',
            '5' => '순수 에너지로 이루어진 생명체가 탑승하여 모든 탐험대원을 이상한 황홀경에 빠뜨렸고, 컴퓨터 화면의 최면 패턴만 응시하게 만들었습니다. 대부분이 최면 상태에서 벗어났을 때 중수소가 너무 부족하여 탐험 임무를 중단해야 했습니다.',
            '6' => '새로운 항법 모듈에 아직 버그가 있습니다. 탐험대의 점프가 잘못된 방향으로 향했을 뿐만 아니라 모든 중수소 연료를 사용했습니다. 다행히 함대의 점프가 출발 행성의 달 근처로 이동했습니다. 실망한 탐험대는 이제 추진력 없이 귀환합니다. 귀환 여행은 예상보다 오래 걸릴 것입니다.',
            '7' => '탐험대는 우주의 광대한 공허함에 대해 배웠습니다. 이 탐험을 흥미롭게 만들 수 있는 작은 소행성이나 방사선 또는 입자조차 없었습니다.',
            '8' => '이제 우리는 그 붉은 5등급 이상 현상이 함선의 항법 시스템에 혼란스러운 영향을 미칠 뿐만 아니라 승무원에게 대규모 환각을 일으킨다는 것을 알게 되었습니다. 탐험대는 아무것도 가져오지 못했습니다.',
            '9' => '탐험대는 초신성의 멋진 사진을 찍었습니다. 탐험에서 새로운 것을 얻지는 못했지만, 적어도 다음 달 OGame 잡지의 "우주 최고의 사진" 대회에서 우승할 가능성이 높습니다.',
            '10' => '탐험 함대는 한동안 이상한 신호를 따라갔습니다. 결국 그 신호가 여러 세대 전에 외계 종족을 맞이하기 위해 발사된 오래된 탐사선에서 보내진 것임을 알게 되었습니다. 탐사선은 회수되었으며 모성의 일부 박물관이 이미 관심을 표명했습니다.',
            '11' => '이 구역의 첫 번째, 매우 유망한 스캔에도 불구하고 안타깝게도 빈손으로 돌아왔습니다.',
            '12' => '알려지지 않은 습지 행성의 기묘한 작은 애완동물 외에는 이 탐험에서 흥미로운 것을 가져오지 못했습니다.',
            '13' => '탐험대의 기함이 경고 없이 함대로 점프한 외계 함선과 충돌했습니다. 외계 함선은 폭발했고 기함의 손상은 상당했습니다. 이러한 상황에서는 탐험을 계속할 수 없으므로 필요한 수리가 완료되면 함대는 귀환을 시작할 것입니다.',
            '14' => '우리 탐험팀은 오래전에 버려진 이상한 식민지를 발견했습니다. 착륙 후 승무원은 외계 바이러스로 인한 고열에 시달리기 시작했습니다. 이 바이러스가 행성의 전체 문명을 전멸시킨 것으로 밝혀졌습니다. 우리 탐험팀은 병든 승무원을 치료하기 위해 귀환하고 있습니다. 불행히도 임무를 중단해야 했으며 빈손으로 돌아옵니다.',
            '15' => '이상한 컴퓨터 바이러스가 모성계를 출발한 직후 항법 시스템을 공격했습니다. 이로 인해 탐험 함대가 원을 그리며 비행했습니다. 말할 필요도 없이 탐험은 그다지 성공적이지 못했습니다.',
        ],
    ],

    // Gain Resources
    'expedition_gain_resources' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionGainResources class.
        'body' => [
            '1' => '고립된 소행성에서 쉽게 접근할 수 있는 자원 필드를 발견하고 성공적으로 수확했습니다.',
            '2' => '탐험대가 작은 소행성을 발견했으며 그곳에서 일부 자원을 수확할 수 있었습니다.',
            '3' => '탐험대가 완전히 적재되었지만 버려진 고대 화물선 선단을 발견했습니다. 일부 자원을 회수할 수 있었습니다.',
            '4' => '탐험 함대가 거대한 외계 함선 잔해를 발견했다고 보고합니다. 그들의 기술을 배울 수는 없었지만 함선을 주요 구성 요소로 분해하고 유용한 자원을 만들 수 있었습니다.',
            '5' => '자체 대기가 있는 작은 달에서 탐험대가 거대한 원시 자원 저장소를 발견했습니다. 지상의 승무원이 그 자연적인 보물을 들어 올려 적재하려고 시도하고 있습니다.',
            '6' => '알려지지 않은 행성 주변의 광물 띠에는 수많은 자원이 포함되어 있었습니다. 탐험 함선이 돌아오고 있으며 적재고가 가득 차 있습니다!',
        ],
    ],

    // Gain Dark Matter
    'expedition_gain_dark_matter' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionGainDarkMatter class.
        'body' => [
            '1' => '탐험대가 이상한 신호를 따라 소행성으로 향했습니다. 소행성의 핵에서 소량의 암흑물질을 발견했습니다. 소행성을 가져왔으며 탐험가들이 암흑물질을 추출하려고 시도하고 있습니다.',
            '2' => '탐험대가 일부 암흑물질을 포획하여 저장할 수 있었습니다.',
            '3' => '우리는 작은 함선의 선반에서 이상한 외계인을 만났는데, 그는 간단한 수학 계산에 대한 대가로 암흑물질이 담긴 상자를 주었습니다.',
            '4' => '우리는 외계 함선의 잔해를 발견했습니다. 화물칸의 선반에서 약간의 암흑물질이 담긴 작은 용기를 발견했습니다!',
            '5' => '우리 탐험대가 특별한 종족과 첫 접촉을 했습니다. 순수 에너지로 만들어진 생명체로 보이는 레고리안이라는 이름의 존재가 탐험 함선을 통과하여 날아갔고 우리의 저개발 종족을 돕기로 결정했습니다. 함선의 함교에 암흑물질이 담긴 상자가 실체화되었습니다!',
            '6' => '우리 탐험대가 소량의 암흑물질을 운반하던 유령선을 인수했습니다. 함선의 원래 승무원에게 무슨 일이 일어났는지에 대한 힌트를 찾지 못했지만 우리 기술자들은 암흑물질을 회수할 수 있었습니다.',
            '7' => '우리 탐험대가 독특한 실험을 수행했습니다. 죽어가는 별에서 암흑물질을 수확할 수 있었습니다.',
            '8' => '우리 탐험대가 녹슨 우주 정거장을 발견했는데, 오랫동안 외부 우주를 통제 없이 떠다니는 것처럼 보였습니다. 정거장 자체는 완전히 쓸모가 없었지만 원자로에 일부 암흑물질이 저장되어 있다는 것이 발견되었습니다. 우리 기술자들이 가능한 한 많이 구하려고 시도하고 있습니다.',
        ],
    ],

    // Gain Ships
    'expedition_gain_ships' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionGainShips class.
        'body' => [
            '1' => '우리 탐험대가 특정 연쇄 전쟁 중에 거의 파괴된 행성을 발견했습니다. 궤도 주위에 다양한 함선이 떠다니고 있습니다. 기술자들이 일부를 수리하려고 시도하고 있습니다. 여기서 무슨 일이 일어났는지에 대한 정보도 얻을 수 있을 것입니다.',
            '2' => '우리는 버려진 해적 정거장을 발견했습니다. 격납고에 오래된 함선이 몇 척 있습니다. 우리 기술자들이 그 중 일부가 여전히 유용한지 알아내고 있습니다.',
            '3' => '탐험대가 오래전에 버려진 식민지의 조선소로 들어갔습니다. 조선소 격납고에서 구조될 수 있는 일부 함선을 발견했습니다. 기술자들이 일부를 다시 비행하게 만들려고 시도하고 있습니다.',
            '4' => '우리는 이전 탐험대의 잔해를 발견했습니다! 우리 기술자들이 일부 함선을 다시 작동시키려고 시도할 것입니다.',
            '5' => '우리 탐험대가 오래된 자동 조선소로 들어갔습니다. 일부 함선은 여전히 생산 단계에 있으며 우리 기술자들이 현재 조선소의 에너지 발생기를 재활성화하려고 시도하고 있습니다.',
            '6' => '우리는 함대의 잔해를 발견했습니다. 기술자들은 거의 온전한 함선으로 직접 가서 다시 작동시키려고 시도했습니다.',
            '7' => '우리는 멸종된 문명의 행성을 발견했습니다. 거대하고 온전한 우주 정거장이 궤도를 돌고 있는 것을 볼 수 있습니다. 일부 기술자와 조종사가 여전히 사용할 수 있는 함선을 찾기 위해 지표면으로 갔습니다.',
        ],
    ],

    // Gain Item
    'expedition_gain_item' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionGainItem class.
        'body' => [
            '1' => '도망치는 함대가 탈출을 돕기 위해 우리의 주의를 돌리려고 아이템을 남기고 갔습니다.',
        ],
    ],

    // Failed and Speedup
    'expedition_failed_and_speedup' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionSpeedup class.
        'body' => [
            '1' => '탐험대는 탐험된 구역에서 어떤 이상 현상도 보고하지 않습니다. 그러나 함대가 귀환하는 동안 태양풍을 만났습니다. 이로 인해 귀환 여행이 빨라졌습니다. 탐험대가 조금 일찍 귀환합니다.',
            '2' => '새롭고 대담한 사령관이 불안정한 웜홀을 성공적으로 통과하여 귀환 비행을 단축했습니다! 그러나 탐험 자체는 새로운 것을 가져오지 못했습니다.',
            '3' => '엔진의 에너지 스풀에서 예상치 못한 역결합이 탐험대의 귀환을 앞당겼으며 예상보다 일찍 귀환합니다. 첫 보고서에 따르면 설명할 흥미로운 것이 없다고 합니다.',
        ],
    ],

    // Failure and Delay
    'expedition_failed_and_delay' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionDelay class.
        'body' => [
            '1' => '탐험대가 입자 폭풍으로 가득한 구역으로 진입했습니다. 이로 인해 에너지 저장고가 과부하되고 대부분의 함선 주요 시스템이 충돌했습니다. 정비사들이 최악의 상황을 피할 수 있었지만 탐험대는 큰 지연으로 귀환할 것입니다.',
            '2' => '항해사가 계산에서 중대한 오류를 범하여 탐험대의 점프가 잘못 계산되었습니다. 함대가 목표를 완전히 놓쳤을 뿐만 아니라 귀환 여행도 원래 계획보다 훨씬 더 많은 시간이 걸릴 것입니다.',
            '3' => '적색 거성의 태양풍이 탐험대의 점프를 망쳤으며 귀환 점프를 계산하는 데 상당한 시간이 걸릴 것입니다. 그 구역의 별들 사이의 공허한 공간 외에는 아무것도 없었습니다. 함대는 예상보다 늦게 귀환할 것입니다.',
        ],
    ],

    // Battle
    'expedition_battle' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionBattle class.
        'body' => [
            '1' => '일부 원시적인 야만인들이 우주선이라고 부를 수도 없는 함선으로 우리를 공격하고 있습니다. 사격이 심각해지면 반격해야 할 것입니다.',
            '2' => '다행히 소수에 불과한 해적들과 싸워야 했습니다.',
            '3' => '우리는 취한 해적들의 무선 전송을 포착했습니다. 곧 공격을 받을 것 같습니다.',
            '4' => '우리 탐험대가 소규모 미지의 함선 무리에게 공격을 받았습니다!',
            '5' => '정말 절박한 우주 해적들이 우리 탐험 함대를 나포하려고 시도했습니다.',
            '6' => '이국적으로 보이는 함선들이 경고 없이 탐험 함대를 공격했습니다!',
            '7' => '탐험 함대가 미지의 종족과 우호적이지 않은 첫 접촉을 했습니다.',
        ],
    ],

    // Battle - Pirates
    'expedition_battle_pirates' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        'body' => [
            '1' => '일부 원시적인 야만인들이 우주선이라고 부를 수도 없는 함선으로 우리를 공격하고 있습니다. 사격이 심각해지면 반격해야 할 것입니다.',
            '2' => '다행히 소수에 불과한 해적들과 싸워야 했습니다.',
            '3' => '우리는 취한 해적들의 무선 전송을 포착했습니다. 곧 공격을 받을 것 같습니다.',
            '4' => '우리 탐험대가 소규모 우주 해적 무리에게 공격을 받았습니다!',
            '5' => '정말 절박한 우주 해적들이 우리 탐험 함대를 나포하려고 시도했습니다.',
            '6' => '해적들이 경고 없이 탐험 함대를 기습했습니다!',
            '7' => '우주 해적들의 허술한 함대가 우리를 가로막고 공물을 요구했습니다.',
        ],
    ],

    // Battle - Aliens
    'expedition_battle_aliens' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        'body' => [
            '1' => '우리는 미지의 함선으로부터 이상한 신호를 포착했습니다. 그들은 적대적으로 판명되었습니다!',
            '2' => '외계인 순찰대가 우리 탐험 함대를 감지하고 즉시 공격했습니다!',
            '3' => '탐험 함대가 미지의 종족과 우호적이지 않은 첫 접촉을 했습니다.',
            '4' => '이국적으로 보이는 함선들이 경고 없이 탐험 함대를 공격했습니다!',
            '5' => '외계 전함 함대가 초공간에서 출현하여 우리와 교전했습니다!',
            '6' => '우리는 평화롭지 않은 기술적으로 진보된 외계 종족을 만났습니다.',
            '7' => '외계 함선이 공격하기 전에 우리 센서가 알 수 없는 에너지 신호를 감지했습니다!',
        ],
    ],

    // Loss of Fleet
    'expedition_loss_of_fleet' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionLossOfFleet class.
        'body' => [
            '1' => '선두 함선의 노심 용해가 연쇄 반응으로 이어져 전체 탐험 함대가 장엄한 폭발로 파괴됩니다.',
        ],
    ],

    // Merchant Found
    'expedition_merchant_found' => [
        'from' => '함대 사령부',
        'subject' => '탐험 결과',
        // An expedition message can have different variations which are parsed by the ExpeditionMerchantFound class.
        'body' => [
            '1' => '탐험 함대가 우호적인 외계 종족과 접촉했습니다. 그들은 거래할 상품을 가지고 대표를 귀하의 세계로 보낼 것이라고 발표했습니다.',
            '2' => '신비한 상인선이 탐험대에 접근했습니다. 교역자는 귀하의 행성을 방문하여 특별한 거래 서비스를 제공하겠다고 제안했습니다.',
            '3' => '탐험대가 은하간 상인 선단을 만났습니다. 상인 중 한 명이 거래 기회를 제공하기 위해 귀하의 모성을 방문하기로 동의했습니다.',
        ],
    ],

    // ------------------------
    // Buddy Request Received
    'buddy_request_received' => [
        'from' => '친구',
        'subject' => '친구 요청',
        'body' => ':sender_name으로부터 새로운 친구 요청을 받았습니다.<span style="display:none;">:buddy_request_id</span>',
    ],

    // ------------------------
    // Buddy Request Accepted
    'buddy_request_accepted' => [
        'from' => '친구',
        'subject' => '친구 요청 수락됨',
        'body' => '플레이어 :accepter_name이 귀하를 친구 목록에 추가했습니다.',
    ],

    // ------------------------
    // Buddy Removed
    'buddy_removed' => [
        'from' => '친구',
        'subject' => '친구 목록에서 삭제됨',
        'body' => '플레이어 :remover_name이 귀하를 친구 목록에서 제거했습니다.',
    ],

    // ------------------------
    // Missile Attack Report (Attacker)
    'missile_attack_report' => [
        'from' => '함대 사령부',
        'subject' => ':target_coords 미사일 공격',
        'body' => ':origin_planet_name :origin_planet_coords (ID: :origin_planet_id)의 행성간 미사일이 :target_planet_name :target_coords (ID: :target_planet_id, 유형: :target_type)의 목표에 도달했습니다.

발사된 미사일: :missiles_sent
요격된 미사일: :missiles_intercepted
명중한 미사일: :missiles_hit

파괴된 방어시설: :defenses_destroyed',
    ],

    // ------------------------
    // Missile Defense Report (Defender)
    'missile_defense_report' => [
        'from' => '방어 사령부',
        'subject' => ':planet_coords 미사일 공격',
        'body' => ':planet_coords (ID: :planet_id)의 행성 :planet_name이 :attacker_name의 행성간 미사일 공격을 받았습니다!

도착하는 미사일: :missiles_incoming
요격된 미사일: :missiles_intercepted
명중한 미사일: :missiles_hit

파괴된 방어시설: :defenses_destroyed',
    ],

    // ------------------------
    // Alliance Broadcast
    'alliance_broadcast' => [
        'from' => ':sender_name',
        'subject' => '[:alliance_tag] :sender_name의 동맹 방송',
        'body' => ':message',
    ],

    // ------------------------
    // Alliance Application Received
    'alliance_application_received' => [
        'from' => '동맹 관리',
        'subject' => '새로운 동맹 가입 신청',
        'body' => '플레이어 :applicant_name이 귀하의 동맹 가입을 신청했습니다.

가입 신청 메시지:
:application_message',
    ],

    // Planet relocation messages
    'planet_relocation_success' => [
        'from' => '식민지 관리',
        'subject' => ':planet_name 이주 성공',
        'body' => '행성 :planet_name이 좌표 [coordinates]:old_coordinates[/coordinates]에서 [coordinates]:new_coordinates[/coordinates]로 성공적으로 이주되었습니다.',
    ],

    // Fleet union invite
    'fleet_union_invite' => [
        'from' => '함대 사령부',
        'subject' => '동맹 전투 초대',
        'body' => ':sender_name이 [:target_coords]의 :target_player에 대한 임무 :union_name에 귀하를 초대했으며, 함대는 :arrival_time에 맞춰 예정되었습니다.

주의: 함대 합류로 인해 도착 시간이 변경될 수 있습니다. 각각의 새로운 함대는 이 시간을 최대 30%까지 연장할 수 있으며, 그렇지 않으면 합류가 허용되지 않습니다.

참고: 모든 참가자의 총 전력과 방어자의 총 전력을 비교하여 명예로운 전투인지 여부가 결정됩니다.',
    ],

    // Building upgrade messages
    'Shipyard is being upgraded.' => '조선소가 업그레이드 중입니다.',
    'Nanite Factory is being upgraded.' => '나노봇 공장이 업그레이드 중입니다.',

    // ------------------------
    // Moon destruction messages (attacker)
    // TODO: these moon destruction messages are not correct and should be updated with
    // real official messages from the original game. These are just placeholders for now.
    'moon_destruction_success' => [
        'from' => '함대 사령부',
        'subject' => '달 :moon_name [:moon_coords] 파괴됨!',
        'body' => '파괴 확률 :destruction_chance 및 데스스타 손실 확률 :loss_chance로, 귀하의 함대가 :moon_coords의 달 :moon_name을 성공적으로 파괴했습니다.',
    ],

    // ------------------------
    'moon_destruction_failure' => [
        'from' => '함대 사령부',
        'subject' => ':moon_coords 달 파괴 실패',
        'body' => '파괴 확률 :destruction_chance 및 데스스타 손실 확률 :loss_chance로, 귀하의 함대가 :moon_coords의 달 :moon_name 파괴에 실패했습니다. 함대가 귀환하고 있습니다.',
    ],

    // ------------------------
    'moon_destruction_catastrophic' => [
        'from' => '함대 사령부',
        'subject' => ':moon_coords 달 파괴 중 치명적 손실',
        'body' => '파괴 확률 :destruction_chance 및 데스스타 손실 확률 :loss_chance로, 귀하의 함대가 :moon_coords의 달 :moon_name 파괴에 실패했습니다. 게다가 모든 데스스타가 시도 중에 손실되었습니다. 잔해가 없습니다.',
    ],

    // ------------------------
    'moon_destruction_mission_failed' => [
        'from' => '함대 사령부',
        'subject' => ':coordinates 달 파괴 임무 실패',
        'body' => '귀하의 함대가 :coordinates에 도착했지만 목표 위치에서 달을 발견하지 못했습니다. 함대가 귀환하고 있습니다.',
    ],

    // ------------------------
    // Moon destruction messages (defender)
    'moon_destruction_repelled' => [
        'from' => '우주 감시',
        'subject' => '달 :moon_name [:moon_coords] 파괴 시도 격퇴',
        'body' => ':attacker_name이 파괴 확률 :destruction_chance 및 데스스타 손실 확률 :loss_chance로 :moon_coords의 달 :moon_name을 공격했습니다. 귀하의 달이 공격에서 살아남았습니다!',
    ],

    // ------------------------
    'moon_destroyed' => [
        'from' => '우주 감시',
        'subject' => '달 :moon_name [:moon_coords] 파괴됨!',
        'body' => ':moon_coords의 달 :moon_name이 :attacker_name의 데스스타 함대에 의해 파괴되었습니다!',
    ],

    // ------------------------
    // Wreck field repair completed
    'wreck_field_repair_completed' => [
        'from' => '시스템 메시지',
        'subject' => '수리 완료',
        'body' => '행성 :planet의 수리 요청이 완료되었습니다.
:ship_count 함선이 다시 가동되었습니다.',
    ],
];
