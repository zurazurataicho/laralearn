<?php

namespace App\Services;

use App\Contracts\Services\GreetingService;

class HelloService implements GreetingService
{
    public function say()
    {
        return "hello!";
    }
}
