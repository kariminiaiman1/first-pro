<?php

namespace App\Http\Controllers;
use App\User;
use App\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
      public function index() {
        $tasks =DB::table('ads')->join('users','users.id','=','ads.user_id')->select('ads.*','users.name')->latest('ads.created_at')->paginate(6);
        return view('home', compact('tasks',Auth::user()));
    }
}
