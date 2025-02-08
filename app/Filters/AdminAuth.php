<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    /**
     * Runs before the controller method is executed.
     * Redirects to login if the admin is not authenticated.
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('isAdminLoggedIn')) {
            return redirect()->to('/admin/login')->with('error', 'You must log in first.');
        }
    }

    /**
     * Runs after the controller method is executed.
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No actions required after the request
    }
}
