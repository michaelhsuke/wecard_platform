<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('experiences')->delete();
        $users = array(
            [
                'id'          => 1,
                'user_id'     => 1,
                'company_id'   => 1,
                'title'      => '研发工程师',
                'description' => '经历说明',
                'started_at'  => Carbon\Carbon::now(),
                'finished_at' => Carbon\Carbon::now(),
                'created_at'  => Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now()
            ],
            [
                'id'          => 2,
                'user_id'     => 1,
                'company_id'   => 2,
                'title'      => '研发工程师',
                'description' => '经历说明',
                'started_at'  => Carbon\Carbon::now(),
                'finished_at' => Carbon\Carbon::now(),
                'created_at'  => Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now()
            ]
        );

        // Uncomment the below to run the seeder
        DB::table('experiences')->insert($users);
    }
}
