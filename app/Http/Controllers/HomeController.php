<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Earning;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::User()->status !=0){
            $lastMonth = Earning::whereMonth(
                'created_at', '=', Carbon::now()->subMonth()->month
            )->where('user_id',Auth::user()->id)->sum('earnings');
            $week = Carbon::today()->subDays(7);
            $today = Carbon::today();
            $curent = Earning::whereMonth('created_at', Carbon::now()->month)
            ->where('user_id',Auth::user()->id)->sum('earnings');
            $lastWeek = Earning::where('created_at', '>=', $week)->where('user_id',Auth::user()->id)->sum('earnings');
            $todayEarning = Earning::where('created_at', '>=', $today)->where('user_id',Auth::user()->id)->sum('earnings');
            $impression = Earning::where('user_id',Auth::user()->id)->sum('impression');
            $clicks = Earning::where('user_id',Auth::user()->id)->sum('clicks');
            $ctr = Earning::where('user_id',Auth::user()->id)->sum('ctr');
            $ecpm = Earning::where('user_id',Auth::user()->id)->sum('ecpm');
            $earnings = Earning::where('user_id',Auth::user()->id)->sum('earnings');
            $table=Earning::where('user_id',Auth::user()->id)->get();
            // return $table;

            return view('home',compact('todayEarning','impression','clicks','ctr','ecpm','earnings','table','lastMonth','lastWeek','curent'));
            }
       else{
        return redirect('/');
       }
    }
}
