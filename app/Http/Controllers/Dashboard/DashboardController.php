<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {

        $greetingName= $request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required'],
        ]);


        User::create($greetingName);
        return 'Name send success';

        // we just get this on chat gpt 
        // $metrics = $this->getMetrics();
        // $recentActivities = $this->getRecentActivities();
        // $notification =$this->getNotification();

        // return view('test',[
        //     'metrics'=>$metrics,
        //     'recentActivities'=> $recentActivities,
        //     'notification'=>$notification
        // ]);
    }
}
