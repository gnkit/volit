<?php

namespace App\Http\Controllers\Shared\Home;

use App\Http\Controllers\Controller;
use Domain\Task\Actions\Task\GetAllTaskAction;

class HomeController extends Controller
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
        $tasks = GetAllTaskAction::execute();

        return view('pages.shared.home.index', ['tasks' => $tasks]);
    }
}
