<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\GitHubService;

class Api extends BaseController
{
    /**
     * Fetch Contributors from GitHub
     */
    public function fetchContributors()
    {
        $githubService = new GitHubService();
        $contributors = $githubService->getContributors();

        return $this->response
            ->setStatusCode(ResponseInterface::HTTP_OK)
            ->setJSON($contributors);
    }

    /**
     * API Documentation Page
     */
    public function docs()
    {
        return view('docs/api');
    }

    /**
     * Server Status Check
     */
    public function status()
    {
        return $this->response
            ->setStatusCode(ResponseInterface::HTTP_OK)
            ->setJSON([
                'status' => 'OK',
                'message' => 'CoreX-Docs API is running successfully.',
                'timestamp' => date('Y-m-d H:i:s')
            ]);
    }
}
