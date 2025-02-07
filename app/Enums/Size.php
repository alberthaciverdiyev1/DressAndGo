<?php

namespace App\Enums;

enum Size: string
{
    case XS = 'Extra Small';
    case S = 'Small';
    case M = 'Medium';
    case L = 'Large';
    case XL = 'Extra Large';
    case XXL = 'Double Extra Large';
    case XXXL = 'Triple Extra Large';

    public function label(): string
    {
        return match ($this) {
            self::XS => 'XS (Extra Small)',
            self::S => 'S (Small)',
            self::M => 'M (Medium)',
            self::L => 'L (Large)',
            self::XL => 'XL (Extra Large)',
            self::XXL => 'XXL (Double Extra Large)',
            self::XXXL => 'XXXL (Triple Extra Large)',
        };
    }
}
