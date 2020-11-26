<?php

namespace Styde;

class Food extends Model {

    public function getBeverageAttribute()
    {
        return $this->attributes['beverage'] ? $this->attributes['beverage'] : false;
    }
}