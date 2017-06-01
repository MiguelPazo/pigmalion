<?php namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class CompleteRangeFac extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'completeRangeServ';
    }
}