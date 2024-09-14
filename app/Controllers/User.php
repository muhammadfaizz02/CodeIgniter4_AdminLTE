<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $user = new UserModel();
        $datauser = $user->findall();

        //dd($dataanggota);

        $data = [
            'datauser' => $datauser
        ];

        return view('user/view_user', $data);
    }

}
