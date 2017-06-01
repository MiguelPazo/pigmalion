<?php namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class ChangeStringFac extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'changeStringServ';
    }
}