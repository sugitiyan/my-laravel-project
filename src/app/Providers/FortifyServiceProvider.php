<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use Laravel\Fortify\Fortify;
use Illuminate\Support\ServiceProvider;

class FortifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // 新規ユーザー登録の処理をFortifyに指定
        Fortify::createUsersUsing(CreateNewUser::class);

        // ログインページや登録ページのビューのカスタマイズ
        Fortify::registerView(function () {
            return view('auth.register');
        });
    }
}
