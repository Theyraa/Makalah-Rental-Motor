<?php

namespace App\Controllers;

class Contoh extends BaseController
{
    public function index(): string
    {
        return view('Contoh_Halaman');
    }
}
