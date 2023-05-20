<?php

namespace Hak\DataFetcher\Facades;

use Illuminate\Support\Facades\Facade;

class Fetch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Fetch';
    }
}