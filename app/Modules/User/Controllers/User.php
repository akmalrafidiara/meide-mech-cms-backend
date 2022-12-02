<?php

namespace App\Modules\User\Controllers;

use App\Modules\User\Models\UserModel;
use CodeIgniter\Controller;

class User extends BaseController
{
    public $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel;
    }
    public function index()
    {
        $data = [
            'title' => 'User Manager',
            'view' => 'admin/user/index',
            'data' => $this->userModel->findAll(),
        ];

        return view('template/dashboard', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add User',
            'view' => 'admin/user/create',
        ];

        return view('template/dashboard', $data);
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'username'          => 'required|min_length[2]|max_length[50]|is_unique[user.username]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'password_confirm'  => 'matches[password]'
        ];
        if ($this->validate($rules)) {
            $data = [
                'full_name'     => $this->request->getVar('full_name'),
                'username'     => $this->request->getVar('username'),
                'email'     => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'uuid'     => rand(10000000, 99999999),
                'is_online'    => 0,
                'status'    => 0,
                'rules'     => $this->request->getVar('role'),
                'images' => 'default.png',
                'thumbnail_images' => 'default.png',
                'createBy' => session()->get('username'),
                'updateBy' => session()->get('username'),
            ];
            // dd($data);
            $this->userModel->save($data);
            return redirect()->to('/admin/user');
        } else {
            $data = [
                'title' => 'Add User',
                'view' => 'admin/user/create',
                'validation' => $this->validator
            ];
            return view('template/dashboard', $data);
        }
    }

    public function destroy($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/admin/user');
    }

    public function getAll()
    {
        $data = $this->this->userModel->findAll();
        return $this->response->setJSON($data);
    }

    public function getOne($id)
    {
        $data = $this->userModel->find($id);
        return $this->response->setJSON($data);
    }
}