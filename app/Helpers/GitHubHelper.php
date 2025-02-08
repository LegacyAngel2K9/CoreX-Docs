<?php

namespace App\Helpers;

use CodeIgniter\HTTP\Client;

class GitHubHelper
{
    private $apiUrl = 'https://api.github.com/repos/LegacyAngel2K9/CoreX/contributors';
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = getenv('GITHUB_API_KEY');
    }

    /**
     * Fetch Contributors from GitHub Repository
     *
     * @return array
     */
    public function getContributors()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $this->apiUrl, [
            'headers' => [
                'User-Agent'    => 'CoreX-Docs',
                'Authorization' => 'token ' . $this->apiKey,
                'Accept'        => 'application/vnd.github.v3+json'
            ]
        ]);

        if ($response->getStatusCode() === 200) {
            return json_decode($response->getBody(), true);
        }

        return [];
    }
}
