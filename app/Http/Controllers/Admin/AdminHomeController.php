<?php

namespace OGame\Http\Controllers\Admin;

use Illuminate\View\View;
use OGame\Http\Controllers\OGameController;
use OGame\Services\PlayerService;

class AdminHomeController extends OGameController
{
    /**
     * Shows the admin portal page (dashboard with management feature cards).
     *
     * @param PlayerService $player
     * @return View
     */
    public function index(PlayerService $player): View
    {
        return view('ingame.admin.home');
    }
}
