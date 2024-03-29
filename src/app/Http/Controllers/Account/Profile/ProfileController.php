<?php

namespace App\Http\Controllers\Account\Profile;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('.pages.account.profile.index');
    }

    public function settings()
    {
        return view('pages.account.profile.settings');
    }
}
