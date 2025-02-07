<?php

namespace App\Traits\Data;

use Illuminate\Support\Str;

trait Slug
{
    protected static function bootSlug()
    {
        static::creating(function ($model) {
            $model->generateSlug();
        });

        static::updating(function ($model) {
            $model->generateSlug();
        });
    }
    protected function generateSlug()
    {
        $id = $this->getKey() ?? Str::random(8);
        $name = $this->getAttribute('name') ?? 'default';

        $this->slug = Str::slug($id . '-' . $name);
    }
}
