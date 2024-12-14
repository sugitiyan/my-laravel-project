<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 紐づけるテーブル名を明示的に指定
    protected $table = 'categories';

    // 一括代入可能なカラムを定義
    protected $fillable = [
        'content',
    ];

    // Contact とのリレーションを定義
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
