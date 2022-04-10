<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slug;

class Action extends Model
{

    protected $fillable = ['user_id', 'category_id', 'approved', 'image_path', 'body', 'slug', 'title', 'tecnische', 'price'];

    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImagepathAttribute($img)
    {
        return asset('storage/images/'.$img);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = SLug::uniqueSlug($value, 'actions');
    }
}
