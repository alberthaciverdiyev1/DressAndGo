<?php

namespace App\Models;

use App\Traits\Data\Image;
use App\Traits\Data\Slug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes,Slug,Image;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'image'
    ];
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
