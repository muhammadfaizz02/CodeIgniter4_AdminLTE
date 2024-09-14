<?php

namespace App\Controllers;

//use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        echo "Ini merupakan halaman profile $this->nama";
    }

    public function Prodi($nama = '',$tahun = 3)
    {
        echo "Ini merupakan halaman profile prodi D3 TI $nama $tahun Tahun";
    }

    public function lulusan()
    {
        echo "Ini merupakan halaman profile lulusan prodi D3 TI";
    }
}
