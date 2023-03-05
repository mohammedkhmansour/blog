<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    // public function notifactionred()
    // {
    //     $user = Auth::user();
    //     foreach($user->notifications as $notification){
    //          $notification->markAsRead();
    //     }
    // }


    public function MarkAsRead_all (Request $request)
    {

        $userUnreadNotification= auth()->user()->unreadNotifications;

        if($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
            return back();
        }


    }
}
