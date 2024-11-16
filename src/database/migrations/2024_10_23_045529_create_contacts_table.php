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
                $table->id(); // 主キー

                // category_id が外部キーであれば外部キー設定を検討
                $table->foreignId('category_id')->constrained()->index();

                // 基本的な個人情報の列
                $table->string('first_name');
                $table->string('last_name');
                $table->tinyInteger('gender'); // 性別 (1: 男性, 2: 女性など)

                // 連絡先情報
                $table->string('email');
                $table->string('phone')->nullable(); // "tell" を "phone" に修正し、nullable に変更

                // 住所関連
                $table->string('address')->nullable();
                $table->string('building')->nullable();

                // お問い合わせ内容
                $table->text('message'); // "detail" を "message" に修正

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
        Schema::dropIfExists('contacts');
    }
}
