<?php

namespace App\Traits\Data;

trait Image
{
    public function image() :?string
    {
        return $this->getAttribute("image")
            ? asset('/storage/' . $this->getAttribute("image"))
            : asset('/images/placeholders/no-image.jpg');
    }
}
