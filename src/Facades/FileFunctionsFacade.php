<?php

namespace Dar3y\FileManager\Facades;

use Illuminate\Support\Facades\Facade;
use Dar3y\FileManager\Services\FileFunctionsService;

class FileFunctionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new FileFunctionsService();
    }
}
