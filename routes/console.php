<?php

use App\Mail\SendNewUserForAdmin;
use App\Mail\TestMail;
use App\Model\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

/*

|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

/*Artisan::command('mail-test', function () {
    Mail::to('nurhayat.1998@hotmail.com')->send(new TestMail);
});*/