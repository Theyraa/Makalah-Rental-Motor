<?php

namespace App\Controllers;

class Contoh extends BaseController
{
    public function index(): string
    {
        echo view('contoh_halaman');
    }
}
