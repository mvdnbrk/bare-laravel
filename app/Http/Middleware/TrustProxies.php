<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
