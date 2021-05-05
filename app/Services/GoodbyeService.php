<?php

namespace App\Services;

use App\Contracts\Services\GreetingService;

class GoodbyeService implements GreetingService
{
    public function say()
    {
        return "goodbye!";
    }
}
