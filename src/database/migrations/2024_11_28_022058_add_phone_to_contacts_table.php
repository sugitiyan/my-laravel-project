<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
        if (!Schema::hasColumn('contacts', 'phone')) {
            $table->string('phone')->nullable();
        }
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::table('contacts', function (Blueprint $table) {
        if (Schema::hasColumn('contacts', 'phone')) {
            $table->dropColumn('phone');
        }
    });
    }
}
