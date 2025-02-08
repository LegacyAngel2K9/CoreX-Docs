<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    /**
     * Display the Admin Login Page
     */
    public function login()
    {
        // If already logged in, redirect to admin dashboard
        if (session()->get('isAdminLoggedIn')) {
            return redirect()->to('/admin')->with('success', 'You are already logged in.');
        }

        return view('admin/login');
    }

    /**
     * Process Admin Login
     */
    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Replace these credentials in production with a secure authentication system
        $adminUsername = 'admin';
        $adminPassword = 'securepassword'; // Change this in a secure way!

        if ($username === $adminUsername && $password === $adminPassword) {
            session()->set('isAdminLoggedIn', true);
            return redirect()->to('/admin')->with('success', 'Welcome back, Admin!');
        }

        return redirect()->back()->with('error', 'Invalid username or password.');
    }

    /**
     * Logout Admin
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login')->with('success', 'You have logged out.');
    }
}
