<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        $companies = array(
            ['id' => 1, 'name' => '广联达软件股份有限公司', 'location' => '北京 海淀区', 'logo' => '', 'description' =>'建筑信息化', 'url' => 'http://www.glodon.com', 'created_at' => Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => '上海翼拍网络股份有限公司', 'location' => '南京 栖霞区', 'logo' => '', 'description' =>'看房宝 不知名茶', 'url' => 'http://www.189pai.com', 'created_at' => Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
        );

        // Uncomment the below to run the seeder
        DB::table('companies')->insert($companies);
    }
}
