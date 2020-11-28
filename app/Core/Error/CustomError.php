<?php

namespace App\Core\Error;

use Throwable;
use Lang;

class CustomError 
{
    protected $exception;
    protected $classNameException;

    public function __construct(Throwable $exception)
    {
        $this->exception = $exception;
        $this->classNameException = get_class($exception);
    }

    public function isConfigured()
    {   
        return Lang::has("error.{$this->classNameException}");
    }
    
    public function getResponse()
    {
        return Lang::get("error.{$this->classNameException}.response");
    }
    
    public function getCode()
    {
        return Lang::get("error.{$this->classNameException}")['code'];
    }

}