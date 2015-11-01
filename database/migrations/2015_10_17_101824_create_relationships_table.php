<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned()->index();  // 谁的电话本
            $table->integer('contact_id')->unsigned()->index();  // 联系人信息
            $table->text('description');  // 对联系人进行描述
            $table->string('nickname');  // 备注联系人
            $table->timestamps();
            $table->integer('stars');  // 为联系人打分

            $table->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relationships');
    }
}
