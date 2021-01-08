<?php

namespace App\Core\Access;

use Illuminate\Support\Facades\Gate;

class Authorization 
{
    public static function authorize(string $action, string $className, string $classNameException) 
    {
        //Gate::authorize($action, $className);
        //throw new $classNameException();
        if (!Gate::inspect($action, $className)->allowed())
            throw new $classNameException();
    }
}