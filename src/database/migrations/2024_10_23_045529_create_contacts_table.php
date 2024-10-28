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
        // テーブルが存在しない場合のみ作成
        if (!Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('category_id')->unsigned()->index();
                $table->string('first_name');
                $table->string('last_name');
                $table->tinyInteger('gender');
                $table->string('email');
                $table->string('tell');
                $table->string('address')->nullable();
                $table->string('building')->nullable();
                $table->text('detail')->nullable();
                $table->timestamps();
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
        // テーブルが存在する場合のみ削除
        Schema::dropIfExists('contacts');
    }
}
