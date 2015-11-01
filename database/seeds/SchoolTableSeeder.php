<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->delete();
        $schools = array(
            ['id' => '1', 'name' => '华中师范大学', 'description' => '7校联合办学', 'location' => '湖北武汉', 'logo' => '', 'url' => 'http://www.ccnu.edu.cn', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => '2', 'name' => '安徽财经大学', 'description' => '财经类院校', 'location' => '安徽蚌埠', 'logo' => '', 'url' => 'http://www.aufe.edu.cn', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
        );

        DB::table('schools')->insert($schools);
    }
}
