<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'role_id' => '3' ,
            'name' => 'yotsuba' ,
            'username' => 'yotsuba' ,
            'password' => 'yotsuka' ,
            'email' => 'yotsuba@gmail.com' ,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
