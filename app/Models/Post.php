<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    //trait мягкого удаления
    use SoftDeletes;


    //фиксируем нашу таблицу
    protected $table = 'post';

    //прописываем возможность добавления в нашу таблицу
    protected $guarded = [];


}
