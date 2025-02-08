<?php

namespace App\Controllers;

use App\Models\DocumentationModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }

        $model = new DocumentationModel();
        $data['docs'] = $model->findAll();

        return view('admin/dashboard', $data);
    }

    public function login()
    {
        return view('admin/login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === env('ADMIN_USERNAME') && password_verify($password, env('ADMIN_PASSWORD_HASH'))) {
            session()->set('isLoggedIn', true);
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/admin/login')->with('error', 'Invalid login credentials');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    public function edit($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }

        $model = new DocumentationModel();
        $data['doc'] = $model->find($id);

        return view('admin/edit', $data);
    }

    public function update()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }

        $model = new DocumentationModel();

        $id = $this->request->getPost('id');
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content')
        ];

        $model->update($id, $data);

        return redirect()->to('/admin')->with('success', 'Documentation updated successfully');
    }
}
