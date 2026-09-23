<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $session = session();
        $userModel = new User();
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $user = $userModel->where('username', $username)->first();
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/admin');
            } else {
                $session->setFlashdata('error', 'Password salah.');
                return redirect()->to('/auth');
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan.');
            return redirect()->to('/auth');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
