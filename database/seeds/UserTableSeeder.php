<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        if ($users->isEmpty())
            // admin bilgileri {
            User::create ([
                    'name' => 'SuperAdmin',
                    'email' => "superadmin@gmail.com",
                    'password' => bcrypt('1234'),
                    'user_name' => 'SuperAdmin',
                    'company' => 'media_sync',
                    'role_id' => 1,
                    'is_active' => 1,

                ]);
       
   
    }
    }