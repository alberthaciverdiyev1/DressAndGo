<?php

namespace App\Models;

use App\Traits\Data\Slug;
use App\Traits\Global\HasActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{

    use HasFactory, SoftDeletes,Slug,HasActiveScope;
    protected $fillable = [
        'name',
        'slug',
        'is_active',
        'code'
    ];
}
