<?php

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
        DB::table('users')->delete();
        $users = array(
            ['id' => 1, 'name' => 'xuke', 'email' => 'xuke_m@qq.com', 'phone' => '15600004321', 'password' => bcrypt('123qwe!@#'),  'created_at' => Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'michaelhsu', 'email' => 'michael.hsu.ke@gmail.com', 'phone' => '15600064321', 'password' => bcrypt('123qwe!@#'),  'created_at' => Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
