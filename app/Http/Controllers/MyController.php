<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myPage(): string
    {
        return 'This is new my-page';
    }
}
