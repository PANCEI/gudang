<?php

namespace App\Controllers;


use \App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('login/index');
    }
    public function cek()
    {


        if (!$this->validate([
            "username" => "required",
            "password" => "required"
        ])) {
            $validasi = \Config\Services::validation();

            return redirect()->to('/login')->withInput();
        }
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');


        $user = $this->userModel->getUsername($username);



        // jika usser ada 
        if ($user) {
            // cek password 
            if (password_verify($password, $user['password'])) {
                //   cek aktfif
                if ($user['aktif'] == 1) {
                    $data = [
                        "id_user" => $user['id_user'],
                        "id_gudang" => $user['id_gudang'],
                        "id_profil" => $user['id_profil']
                    ];
                    session()->set($data);
                    return redirect()->to('/dashboard');
                } else {
                    session()->setFlashdata('error', 'User is Not Active');
                    return redirect()->to('/login');
                }
            } else {
                // kembalikan ke login 
                session()->setFlashdata('error', ' Password is Failed');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('error', "Username  is Wrong");
            return redirect()->to('./login');
        }
    }
    public function out()
    {
    }
}
