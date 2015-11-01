<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('educations')->delete();
        $users = array(
            [
                'id'          => 1,
                'user_id'     => 1,
                'school_id'   => 1,
                'degree'      => '硕士研究生',
                'major'       => '计算机系统结构',
                'description' => '经历说明',
                'started_at'  => Carbon\Carbon::now(),
                'finished_at' => Carbon\Carbon::now(),
                'created_at'  => Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now()
            ],
            [
                'id'          => 2,
                'user_id'     => 1,
                'school_id'   => 2,
                'degree'      => '本科',
                'major'       => '公共事业管理',
                'description' => '经历说明',
                'started_at'  => Carbon\Carbon::now(),
                'finished_at' => Carbon\Carbon::now(),
                'created_at'  => Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now()
            ]
        );

        // Uncomment the below to run the seeder
        DB::table('educations')->insert($users);
    }
}
