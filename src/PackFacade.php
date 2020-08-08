<?php

namespace milk\hello;

use Illuminate\Support\Facades\Facade;

class PackFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Pack';
    }
}
