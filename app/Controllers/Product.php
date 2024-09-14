<?php

namespace App\Controllers;

//use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        echo "Ini merupakan halaman product";
    }

    public function List($nama = '',$harga = '')
    {
        echo "Ini Merupakan Halaman Product Nama = $nama dan Harga = Rp.$harga";
    }
}
