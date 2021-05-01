<?php

namespace App\Http\Controllers;

use App\Contracts\Services\GreetingService;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function say(GreetingService $greeting)
    {
        return $greeting->say();
    }
}
