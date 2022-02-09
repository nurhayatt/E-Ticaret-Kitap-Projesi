<?php

namespace App\Listeners;

use App\Events\CreatedUser;
use App\Mail\SendNewUserForAdmin;
use App\Model\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendNotification as NewUserNotification;


class SendNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CreatedUser $event)
    {
        //Mail smpt ayarları yapıldıktan sonra açılacak
      //  Mail::to(User::first()->email)->send(new SendNewUserForAdmin($event->user));
       
    }
}