<?php

namespace App\Traits\Data;

trait HasCount
{
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::whereNull('deleted_at')->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() < 10 ? 'warning' : 'primary';
    }
}
