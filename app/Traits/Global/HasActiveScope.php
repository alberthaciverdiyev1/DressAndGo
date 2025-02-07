<?php

namespace App\Traits\Global;

trait HasActiveScope
{
    public function scopeActive($query)
    {
        return $query->where('is_active', '=', true);
    }
}

