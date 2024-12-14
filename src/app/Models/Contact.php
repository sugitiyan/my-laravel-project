<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // 紐づけるテーブル名を明示的に指定
    protected $table = 'contacts';

    // 一括代入可能なカラムを定義
    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    // カテゴリとのリレーションを定義
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
