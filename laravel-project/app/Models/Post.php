<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;

    // モデルに関連付けるテーブル
    protected $table = 'posts';

    protected $fillable = [
        'user_name',
        'title',
        'content',
    ];
}
