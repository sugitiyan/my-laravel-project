<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactController extends Controller
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // テーブルが存在しない場合のみ作成
        if (!Schema::hasTable('categories')) {
            Schema::create('categories', function (Blueprint $table) {
                $table->id(); // 主キー (bigint unsigned)
                $table->string('content'); // NOT NULL 制約を追加

                $table->timestamps(); // created_at と updated_at
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
        Schema::dropIfExists('categories');
    }
}
