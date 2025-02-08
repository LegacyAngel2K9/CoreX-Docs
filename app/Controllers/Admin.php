<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DocumentationModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $docModel;

    public function __construct()
    {
        $this->docModel = new DocumentationModel();
    }

    /**
     * Admin Dashboard
     */
    public function index()
    {
        $data['docs'] = $this->docModel->getAllDocs();
        return view('admin/dashboard', $data);
    }

    /**
     * Show Form to Add New Documentation
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store New Documentation Entry
     */
    public function store()
    {
        $validation = $this->validate([
            'title'   => 'required|min_length[3]|max_length[255]',
            'slug'    => 'required|alpha_dash|is_unique[documentation.slug]',
            'content' => 'required'
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->docModel->insert([
            'title'   => $this->request->getPost('title'),
            'slug'    => $this->request->getPost('slug'),
            'content' => $this->request->getPost('content'),
            'category' => $this->request->getPost('category'),
        ]);

        return redirect()->to('/admin')->with('success', 'Documentation added successfully.');
    }

    /**
     * Show Form to Edit Documentation
     */
    public function edit($id)
    {
        $data['doc'] = $this->docModel->find($id);
        return view('admin/edit', $data);
    }

    /**
     * Update Documentation Entry
     */
    public function update($id)
    {
        $validation = $this->validate([
            'title'   => 'required|min_length[3]|max_length[255]',
            'slug'    => "required|alpha_dash|is_unique[documentation.slug,id,{$id}]",
            'content' => 'required'
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->docModel->update($id, [
            'title'   => $this->request->getPost('title'),
            'slug'    => $this->request->getPost('slug'),
            'content' => $this->request->getPost('content'),
            'category' => $this->request->getPost('category'),
        ]);

        return redirect()->to('/admin')->with('success', 'Documentation updated successfully.');
    }

    /**
     * Delete Documentation Entry
     */
    public function delete($id)
    {
        $this->docModel->delete($id);
        return redirect()->to('/admin')->with('success', 'Documentation deleted successfully.');
    }
}
