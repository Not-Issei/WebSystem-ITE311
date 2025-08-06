<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home'); // Make sure 'home.php' exists in app/Views/
    }
}
