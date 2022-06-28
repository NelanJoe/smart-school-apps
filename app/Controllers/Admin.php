<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        return view('pages/index');
    }

    public function jenis()
    {
        $data = array(
            'jenis' => $this->adminModel->getAll()
        );
        return view('jenis/index', $data);
    }
}
