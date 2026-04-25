@extends('ingame.layouts.main')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div id="rewardscomponent" class="maincontent">
        <div id="content">
            <div id="inhalt">
                <div id="planet" style="background-image:url(/img/headers/rewards/rewards.jpg);height:250px;">
                    <div id="header_text">
                        <h2>{{ __('t_ingame.rewards.page_title') }}</h2>
                    </div>
                </div>
                <div id="buttonz">
                    <div class="header">
                        <h2>{{ __('t_ingame.rewards.page_title') }}</h2>
                    </div>
                    <div class="content">
                        <div class="rewardhint rewardnotifyhidden">
                            <img class="rewardwarningicon" src="/img/icons/04be50e8afc747846a55a646381a16.png">
                            <span class="rewardwarningtext">

                </span>
                        </div>

                        <div class="rewardlist">
                            <a class="tooltipLeft fright questionIcons" style="display: inline-block" title="{{ __('t_ingame.rewards.info_tooltip') }}">
                                <span class="rewardDetail"></span>
                            </a>
                            <br>
                            <h3>{{ __('t_ingame.rewards.new_awards') }}</h3>

                            <h3>{{ __('t_ingame.rewards.awards_not_reached') }}</h3>
                            <div class="rewardlist-item">
                                <div class="rewardlistimg rewardlistimg_1 rewardnotclaim">
                                    <div class="rewardlist-item-icon">
                                        <img src="/img/icons/2251eaefdfdf075833e5247781a4ac.png">
                                    </div>
                                    <div class="rewardlist-item-text">
                                        <h3>{{ __('t_ingame.rewards.reward_1_title') }}</h3>
                                        <div class="rewardlist-item-wrapper">
                                            <p>{{ __('t_ingame.rewards.reward_1_text') }}</p>
                                            <a class="reward-button disabled" href="javascript:void(0)">{{ __('t_ingame.rewards.not_fulfilled') }}</a>
                                        </div>
                                        <div class="rewardlist-item-bottom"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="rewardlist-item">
                                <div class="rewardlistimg rewardlistimg_2 rewardnotclaim">
                                    <div class="rewardlist-item-icon">
                                        <img src="/img/icons/2251eaefdfdf075833e5247781a4ac.png">
                                    </div>
                                    <div class="rewardlist-item-text">
                                        <h3>{{ __('t_ingame.rewards.reward_2_title') }}</h3>
                                        <div class="rewardlist-item-wrapper">
                                            <p>{{ __('t_ingame.rewards.reward_2_text') }}</p>
                                            <a class="reward-button disabled" href="javascript:void(0)">{{ __('t_ingame.rewards.not_fulfilled') }}</a>
                                        </div>
                                        <div class="rewardlist-item-bottom"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="rewardlist-item">
                                <div class="rewardlistimg rewardlistimg_4 rewardnotclaim">
                                    <div class="rewardlist-item-icon">
                                        <img src="/img/icons/2251eaefdfdf075833e5247781a4ac.png">
                                    </div>
                                    <div class="rewardlist-item-text">
                                        <h3>{{ __('t_ingame.rewards.reward_4_title') }}</h3>
                                        <div class="rewardlist-item-wrapper">
                                            <p>{{ __('t_ingame.rewards.reward_4_text') }}</p>
                                            <a class="reward-button disabled" href="javascript:void(0)">{{ __('t_ingame.rewards.not_fulfilled') }}</a>
                                        </div>
                                        <div class="rewardlist-item-bottom"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="rewardlist-item">
                                <div class="rewardlistimg rewardlistimg_8 rewardnotclaim">
                                    <div class="rewardlist-item-icon">
                                        <img src="/img/icons/2251eaefdfdf075833e5247781a4ac.png">
                                    </div>
                                    <div class="rewardlist-item-text">
                                        <h3>{{ __('t_ingame.rewards.reward_8_title') }}</h3>
                                        <div class="rewardlist-item-wrapper">
                                            <p>{{ __('t_ingame.rewards.reward_8_text') }}</p>
                                            <a class="reward-button disabled" href="javascript:void(0)">{{ __('t_ingame.rewards.not_fulfilled') }}</a>
                                        </div>
                                        <div class="rewardlist-item-bottom"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="rewardlist-item">
                                <div class="rewardlistimg rewardlistimg_16 rewardnotclaim">
                                    <div class="rewardlist-item-icon">
                                        <img src="/img/icons/2251eaefdfdf075833e5247781a4ac.png">
                                    </div>
                                    <div class="rewardlist-item-text">
                                        <h3>{{ __('t_ingame.rewards.reward_16_title') }}</h3>
                                        <div class="rewardlist-item-wrapper">
                                            <p>{{ __('t_ingame.rewards.reward_16_text') }}</p>
                                            <a class="reward-button disabled" href="javascript:void(0)">{{ __('t_ingame.rewards.not_fulfilled') }}</a>
                                        </div>
                                        <div class="rewardlist-item-bottom"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="rewardlist-item">
                                <div class="rewardlistimg rewardlistimg_32 rewardnotclaim">
                                    <div class="rewardlist-item-icon">
                                        <img src="/img/icons/2251eaefdfdf075833e5247781a4ac.png">
                                    </div>
                                    <div class="rewardlist-item-text">
                                        <h3>{{ __('t_ingame.rewards.reward_32_title') }}</h3>
                                        <div class="rewardlist-item-wrapper">
                                            <p>{{ __('t_ingame.rewards.reward_32_text') }}</p>
                                            <a class="reward-button disabled" href="javascript:void(0)">{{ __('t_ingame.rewards.not_fulfilled') }}</a>
                                        </div>
                                        <div class="rewardlist-item-bottom"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="rewardlist-item">
                                <div class="rewardlistimg rewardlistimg_64 rewardnotclaim">
                                    <div class="rewardlist-item-icon">
                                        <img src="/img/icons/2251eaefdfdf075833e5247781a4ac.png">
                                    </div>
                                    <div class="rewardlist-item-text">
                                        <h3>{{ __('t_ingame.rewards.reward_64_title') }}</h3>
                                        <div class="rewardlist-item-wrapper">
                                            <p>{{ __('t_ingame.rewards.reward_64_text') }}</p>
                                            <a class="reward-button disabled" href="javascript:void(0)">{{ __('t_ingame.rewards.not_fulfilled') }}</a>
                                        </div>
                                        <div class="rewardlist-item-bottom"></div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <h3>{{ __('t_ingame.rewards.collected_awards') }}</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
