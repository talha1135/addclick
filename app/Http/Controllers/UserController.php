<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Earning;
use App\Request_user;
use Hash;
use Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function addUser(){
        return view('auth.register');
    }
    public function add_user(Request $request){
        
       $user= new User();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->mobile=$request->mobile;
       $user->password_u=$request->password;
       $user->password=Hash::make($request['password']);
       $user->save();
        if($user){
            return back();

        }

    }
    public function allUser(){
        $users=User::where('role','=',0)->get();
        return view('users',compact('users'))  ;
    }
    public function dataPage(){
        $user=User::where('role','=',0)->get();
        return view('assigndata',compact('user'));
    }
    public function addData(Request $request){
       $user=new Earning();
       $user->impression=$request->Impression; 
       $user->clicks=$request->Clicks; 
       $user->ctr=$request->CTR; 
       $user->ecpm=$request->ECPM; 
       $user->earnings=$request->Earnings; 
       $user->user_id=$request->User;
       $user->save();
       return back(); 
    }
    public function viewData(Request $request){

        $start=$request->start;
        $end=$request->end;
        // return $end;
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
            $table=Earning::where('user_id',Auth::user()->id) ->whereBetween('created_at', [$start, $end])->get();
            // return $table;

            return view('home',compact('todayEarning','impression','clicks','ctr','ecpm','earnings','table','lastMonth','lastWeek','curent'));
            }
    }

    public function Request(){
       $users=Request_user::all();
    //    return $users;
        return view('request',compact('users'));
    }

    public function admin(){
        $users=User::all();
        return view('admin',compact('users'));
    }
    public function details($id){
        $users=Request_user::where('id',$id)->get();
        // return $users;
        return view('details',compact('users'));
    }
    public function delete($id){
        $users=Request_user::find($id);
        $users->delete();

        return back();
    }
    public function signupPage(){
        return view('signupuser');
    }
    public function signup(Request $request){
        // return $request->all();
        $user=new Request_user;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->website=$request->website;
        $user->pages=$request->pages;
        $user->about=$request->about;
        if($request->has('display_ads')){

            $user->display_ads=1;
        }
        if($request->has('video_ads')){

            $user->video_ads=1;
        } 
        if($request->has('rewarded_ads')){

            $user->rewqarded_ads=1;
        } 
        if($request->has('interstitial_ads')){

            $user->intertial_ads=1;
        }
        if($request->has('message')){

            $user->message=$request->message;
        }

        $user->save();

        return $user;

    }


    public function viewUsersData($id){
        $users=Earning::where('user_id',$id)->get();
        // return $users;
        return view('viewUserData',compact('users'));
    }
    public function userBlock($id){
        $users=user::where('id', $id)
              ->update(['status' => 0]);
        // return $users;
        return back();
    }
    public function userunBlock($id){
        $users=user::where('id', $id)
              ->update(['status' => 1]);
        // return $users;
        return back();
    }

}
