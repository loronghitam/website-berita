<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Berita extends BaseController
{
    public function index()
    {
        return view('cms/pages/kelola_berita/index');
    }
}
