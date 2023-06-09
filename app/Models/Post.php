<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    //трейт фильтрации
    use Filterable;

    //trait мягкого удаления
    use SoftDeletes;


    //фиксируем нашу таблицу
    protected $table = 'post';

    //прописываем возможность добавления в нашу таблицу
    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
}
