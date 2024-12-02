<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('contacts')) {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('category_id'); 
            $table->string('first_name', 255)->nullable(false);
            $table->string('last_name', 255)->nullable(false);
            $table->tinyInteger('gender')->comment('1:男性, 2:女性, 3:その他');
            $table->string('email', 255)->nullable(false);
            $table->string('tel', 255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('building', 255)->nullable();
            $table->text('detail')->nullable(false);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');  // テーブルを削除
    }
}
