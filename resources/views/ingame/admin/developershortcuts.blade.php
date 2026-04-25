@extends('ingame.layouts.main')

@section('content')

    @php /** @var \OGame\Services\PlanetService $currentPlanet */ @endphp

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div id="resourcesettingscomponent" class="maincontent">
        <div id="planet" class="shortHeader">
            <h2>@lang('admin.developer_shortcuts.title')</h2>
        </div>

        <div id="buttonz">
            <div class="header">
                <h2>@lang('admin.developer_shortcuts.title')</h2>
            </div>
            <div class="content">
                <div class="buddylistContent" style="margin-bottom: 60px;">

                    <form action="{{ route('admin.developershortcuts.update') }}" name="form" method="post">
                        {{ csrf_field() }}
                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.update_current_planet')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <input type="submit" class="btn_blue" name="set_mines" value="@lang('admin.developer_shortcuts.set_all_mines')">
                                        <input type="submit" class="btn_blue" name="set_storages" value="@lang('admin.developer_shortcuts.set_all_storages')">
                                        <input type="submit" class="btn_blue" name="set_shipyard" value="@lang('admin.developer_shortcuts.set_all_shipyard')">
                                        <input type="submit" class="btn_blue" name="set_research" value="@lang('admin.developer_shortcuts.set_all_research_10')">
                                    </div>
                                </div>

                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.add_x_units')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.amount_of_units')</label>
                                        <div class="thefield">
                                            <input type="text" pattern="^[0-9,.kmb]+$" class="textInput w50 textCenter textBeefy" placeholder="1" size="2" name="amount_of_units">
                                        </div>
                                    </div>
                                    <div class="fieldwrapper">
                                        @php /** @var OGame\GameObjects\Models\UnitObject $unit */ @endphp
                                        @foreach ($units as $unit)
                                            <input type="submit" name="unit_{{ $unit->id }}" class="btn_blue" value="{{ $unit->title }}">
                                        @endforeach
                                        <input type="submit" class="btn_blue" value="@lang('admin.developer_shortcuts.light_fighter')">
                                    </div>
                                </div>

                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.set_building_level')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.level_to_set')</label>
                                        <div class="thefield">
                                            <input type="text" pattern="^[0-9]+$" placeholder="0" class="textInput w50 textCenter textBeefy" size="2" name="building_level">
                                        </div>
                                    </div>
                                    <div class="fieldwrapper">
                                        @foreach ($buildings as $building)
                                            <input type="submit" name="building_{{ $building->id }}" class="btn_blue" value="{{ $building->title }}">
                                        @endforeach
                                    </div>
                                </div>

                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.set_research_level')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.level_to_set')</label>
                                        <div class="thefield">
                                            <input type="text" pattern="^[0-9]+$" placeholder="0" class="textInput w50 textCenter textBeefy" size="2" name="research_level">
                                        </div>
                                    </div>
                                    <div class="fieldwrapper">
                                        @foreach ($research as $tech)
                                            <input type="submit" name="research_{{ $tech->id }}" class="btn_blue" value="{{ $tech->title }}">
                                        @endforeach
                                    </div>
                                </div>
                                <!-- TODO: refactor this to add/substract DM to any player instead of free changes, this removes unecessary/complex free change logic -->
                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.character_class_settings')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        @php
                                            $freeClassChanges = app(\OGame\Services\SettingsService::class)->get('dev_free_class_changes', false);
                                        @endphp
                                        @if($freeClassChanges)
                                            <input type="submit" class="btn_blue" name="disable_free_class_changes" value="@lang('admin.developer_shortcuts.disable_free_class_changes')">
                                        @else
                                            <input type="submit" class="btn_blue" name="enable_free_class_changes" value="@lang('admin.developer_shortcuts.enable_free_class_changes')">
                                        @endif
                                        <input type="submit" class="btn_blue" name="reset_character_class" value="@lang('admin.developer_shortcuts.reset_character_class')">
                                        <a href="{{ route('characterclass.index') }}" class="btn_blue" style="display: inline-block; padding: 5px 10px; text-decoration: none;">@lang('admin.developer_shortcuts.go_to_class_selection')</a>
                                    </div>
                                </div>

                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.reset_planet')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <input type="submit" class="btn_blue" name="reset_buildings" value="@lang('admin.developer_shortcuts.set_buildings_to_0')">
                                        <input type="submit" class="btn_blue" name="reset_research" value="@lang('admin.developer_shortcuts.set_research_to_0')">
                                        <input type="submit" class="btn_blue" name="reset_units" value="@lang('admin.developer_shortcuts.remove_all_units')">
                                        <input type="submit" class="btn_blue" name="reset_resources" value="@lang('admin.developer_shortcuts.set_resources_to_0')">
                                    </div>
                                </div>
                            </form>

                            <form action="{{ route('admin.developershortcuts.update-resources') }}" name="form" method="post">
                                {{ csrf_field() }}
                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.add_subtract_resources')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <div class="smallFont">@lang('admin.developer_shortcuts.resources_desc')</div>
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.coordinates')</label>
                                        <div class="thefield" style="display: flex; gap: 10px;">
                                            <div>
                                                <label for="galaxy">@lang('admin.developer_shortcuts.galaxy')</label>
                                                <input type="text" id="galaxy" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->galaxy }}" min="1" max="{{ $settings->numberOfGalaxies() }}" name="galaxy">
                                            </div>
                                            <div>
                                                <label for="system">@lang('admin.developer_shortcuts.system')</label>
                                                <input type="text" id="system" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->system }}" min="1" max="499" name="system">
                                            </div>
                                            <div>
                                                <label for="position">@lang('admin.developer_shortcuts.position')</label>
                                                <input type="text" id="position" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->position }}" min="1" max="15" name="position">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fieldwrapper"><label class="styled textBeefy">@lang('admin.developer_shortcuts.resources_to_add_subtract')</label>
                                        <div class="thefield" style="display: flex; flex-direction: column; gap: 10px;">
                                            @foreach (\OGame\Models\Enums\ResourceType::cases() as $resource)
                                                <div style="display: flex; gap: 10px;">
                                                    <label for="{{ $resource->value }}" style="min-width: 80px;">{{ $resource->name }}:</label>
                                                    <input type="text" id="{{ $resource->value }}" pattern="^[-+0-9,.kmb]+$"
                                                           class="textInput w100 textCenter textBeefy"
                                                           placeholder="0" name="{{ $resource->value }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="fieldwrapper" style="text-align: center;">
                                        <input type="submit" class="btn_blue" name="update_resources_planet" value="Update Resources (planet)">
                                        <input type="submit" class="btn_blue" name="update_resources_moon" value="Update Resources (moon)">
                                    </div>
                                </div>
                            </form>

                            <form action="{{ route('admin.developershortcuts.create-at-coords') }}" name="form" method="post">
                                {{ csrf_field() }}
                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.create_planet_moon')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.coordinates')</label>
                                        <div class="thefield" style="display: flex; gap: 10px;">
                                            <div>
                                                <label for="galaxy">@lang('admin.developer_shortcuts.galaxy')</label>
                                                <input type="text" id="galaxy" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->galaxy }}" min="1" max="{{ $settings->numberOfGalaxies() }}" name="galaxy">
                                            </div>
                                            <div>
                                                <label for="system">@lang('admin.developer_shortcuts.system')</label>
                                                <input type="text" id="system" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->system }}" min="1" max="499" name="system">
                                            </div>
                                            <div>
                                                <label for="position">@lang('admin.developer_shortcuts.position')</label>
                                                <input type="text" id="position" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->position }}" min="1" max="15" name="position">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.moon_size')</label>
                                        <div class="thefield" style="display: flex; gap: 15px; align-items: flex-start;">
                                            <div style="flex: 1;">
                                                <label for="moon_debris" style="display: block; margin-bottom: 5px;">@lang('admin.developer_shortcuts.debris_amount')</label>
                                                <input type="text" id="moon_debris" pattern="^[-+0-9,.kmb]+$" class="textInput textCenter textBeefy"
                                                       style="width: 100%;" value="2000000" placeholder="2000000" name="moon_debris" title="Total debris (metal+crystal+deuterium) that determines moon size">
                                                <span style="display: block; font-size: 0.9em; color: #666; margin-top: 5px;">Examples: 100k, 500k, 1M, 2M</span>
                                            </div>
                                            <div style="flex: 1;">
                                                <label for="moon_factor" style="display: block; margin-bottom: 5px;">@lang('admin.developer_shortcuts.x_factor')</label>
                                                <input type="text" id="moon_factor" pattern="^[0-9]+$" class="textInput textCenter textBeefy"
                                                       style="width: 100%;" value="" placeholder="Random" name="moon_factor" min="10" max="20" title="X factor in formula (10-20). Leave blank for random.">
                                                <span style="display: block; font-size: 0.9em; color: #666; margin-top: 5px;">Leave blank = random</span>
                                            </div>
                                        </div>
                                        <span style="display: block; font-size: 0.9em; color: #999; margin-top: 8px; font-style: italic;">Formula: diameter = floor((x + 3*debris/100000)^0.5 * 1000)</span>
                                    </div>
                                    <div class="fieldwrapper" style="text-align: center; margin-bottom: 20px;">
                                        <input type="submit" class="btn_blue" name="create_planet" value="@lang('admin.developer_shortcuts.create_planet')">
                                        <input type="submit" class="btn_blue" name="create_moon" value="@lang('admin.developer_shortcuts.create_moon')">
                                        <input type="submit" class="btn_blue" name="delete_planet" value="@lang('admin.developer_shortcuts.delete_planet')">
                                        <input type="submit" class="btn_blue" name="delete_moon" value="@lang('admin.developer_shortcuts.delete_moon')">
                                    </div>
                                </div>
                            </form>

                            <form action="{{ route('admin.developershortcuts.create-debris') }}" name="form" method="post">
                                {{ csrf_field() }}
                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.create_delete_debris')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.coordinates')</label>
                                        <div class="thefield" style="display: flex; gap: 10px;">
                                            <div>
                                                <label for="galaxy">@lang('admin.developer_shortcuts.galaxy')</label>
                                                <input type="text" id="galaxy" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->galaxy }}" min="1" max="{{ $settings->numberOfGalaxies() }}" name="galaxy">
                                            </div>
                                            <div>
                                                <label for="system">@lang('admin.developer_shortcuts.system')</label>
                                                <input type="text" id="system" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->system }}" min="1" max="499" name="system">
                                            </div>
                                            <div>
                                                <label for="position">@lang('admin.developer_shortcuts.position') (1-16)</label>
                                                <input type="text" id="position" pattern="^[-+0-9,.kmb]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->position }}" min="1" max="16" name="position">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.resources_to_add')</label>
                                        <div class="thefield" style="display: flex; flex-direction: column; gap: 10px;">
                                            @foreach (\OGame\Models\Enums\ResourceType::cases() as $resource)
                                                <div style="display: flex; gap: 10px;">
                                                    <label for="{{ $resource->value }}" style="min-width: 80px;">{{ $resource->name }}:</label>
                                                    <input type="text" id="{{ $resource->value }}" pattern="^[-+0-9,.kmb]+$"
                                                           class="textInput w100 textCenter textBeefy"
                                                           placeholder="0" name="{{ $resource->value }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="fieldwrapper" style="text-align: center; margin-bottom: 20px;">
                                        <input type="submit" class="btn_blue" name="create_debris" value="@lang('admin.developer_shortcuts.create_append_debris')">
                                        <input type="submit" class="btn_blue" name="delete_debris" value="@lang('admin.developer_shortcuts.delete_debris_field')">
                                    </div>
                                    <div class="fieldwrapper" style="text-align: center; margin-bottom: 50px; padding-top: 10px; border-top: 1px solid #444;">
                                        <p style="margin-bottom: 10px; color: #999; font-size: 0.9em;">Quick shortcut for testing Discoverer class:</p>
                                        <button type="submit" class="btn_blue" onclick="document.getElementById('position').value='16'; document.getElementById('metal').value='100000'; document.getElementById('crystal').value='50000'; document.getElementById('deuterium').value='25000'; return true;">
                                            Create Expedition Debris (Position 16)
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <form action="{{ route('admin.developershortcuts.update-dark-matter') }}" name="form" method="post">
                                {{ csrf_field() }}
                                <p class="box_highlight textCenter no_buddies">@lang('admin.developer_shortcuts.add_subtract_dark_matter')</p>
                                <div class="group bborder" style="display: block;">
                                    <div class="fieldwrapper">
                                        <div class="smallFont">@lang('admin.developer_shortcuts.dark_matter_desc')</div>
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.coordinates')</label>
                                        <div class="thefield" style="display: flex; gap: 10px;">
                                            <div>
                                                <label for="dm_galaxy">@lang('admin.developer_shortcuts.galaxy')</label>
                                                <input type="text" id="dm_galaxy" pattern="^[0-9]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->galaxy }}" min="1" max="{{ $settings->numberOfGalaxies() }}" name="galaxy">
                                            </div>
                                            <div>
                                                <label for="dm_system">@lang('admin.developer_shortcuts.system')</label>
                                                <input type="text" id="dm_system" pattern="^[0-9]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->system }}" min="1" max="499" name="system">
                                            </div>
                                            <div>
                                                <label for="dm_position">@lang('admin.developer_shortcuts.position')</label>
                                                <input type="text" id="dm_position" pattern="^[0-9]+$" class="textInput w50 textCenter textBeefy"
                                                       value="{{ $currentPlanet->getPlanetCoordinates()->position }}" min="1" max="15" name="position">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fieldwrapper">
                                        <label class="styled textBeefy">@lang('admin.developer_shortcuts.dark_matter_amount')</label>
                                        <div class="thefield">
                                            <input type="text" id="dark_matter" pattern="^[-+0-9,.kmb]+$"
                                                   class="textInput w100 textCenter textBeefy"
                                                   placeholder="0" name="dark_matter">
                                        </div>
                                    </div>
                                    <div class="fieldwrapper" style="text-align: center;">
                                        <input type="submit" class="btn_blue" name="update_dark_matter" value="@lang('admin.developer_shortcuts.update_dark_matter')">
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
            </div>

        <script language="javascript">
            initBBCodes();
            initOverlays();
        </script>
    </div>

@endsection
