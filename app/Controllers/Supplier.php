<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Supplier extends BaseController
{
    public function index()
    {
        return view('supplier/view_supplier');
    }
}
