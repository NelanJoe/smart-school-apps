<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kegiatan extends BaseController
{
    public function index()
    {
        return view('pages/kegiatan');
    }
}
