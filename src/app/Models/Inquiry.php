<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $table = 'inquiries'; // テーブル名を指定
    protected $fillable = [         // 登録可能なカラムを設定
        'name',
        'email',
        'gender',
        'inquiry_type',
        'created_at',
        'updated_at',
    ];
}
