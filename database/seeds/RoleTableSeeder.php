<?php

use App\Model\RoleModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = RoleModel::all();
        if ($roles->isEmpty()) {
            $role = array(
                    array('the_role' => 'superadmin'), // role_id=1
                    array('the_role' => 'admin'), // role_id=2

                );

            foreach ($role as $rl) {
                RoleModel::create($rl);
            }
            DB::table('role_user')->insert(['role_id' => 1, "user_id" => 1]); // role_id=1 Admin
            DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 2]);
          
    }
}
}