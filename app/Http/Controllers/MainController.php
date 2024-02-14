<?php

namespace App\Http\Controllers;

use App\Http\Services\Service;

class MainController extends Controller
{
   public function __construct(protected Service $service)
   {
   }
}
