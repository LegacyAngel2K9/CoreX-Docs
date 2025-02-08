<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\Client;

class ContributorsModel extends Model
{
    protected $table = 'contributors';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'avatar_url', 'profile_url', 'contributions'];

    /**
     * Fetches Contributors from GitHub API
     *
     * @return array
     */
    public function fetchContributors()
    {
        $githubApiUrl = 'https://api.github.com/repos/LegacyAngel2K9/CoreX/contributors';
        $githubApiKey = getenv('GITHUB_API_KEY');

        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $githubApiUrl, [
            'headers' => [
                'User-Agent'    => 'CoreX-Docs',
                'Authorization' => 'token ' . $githubApiKey,
                'Accept'        => 'application/vnd.github.v3+json'
            ]
        ]);

        if ($response->getStatusCode() === 200) {
            return json_decode($response->getBody(), true);
        }

        return [];
    }

    /**
     * Stores contributors in the database for caching
     *
     * @param array $contributors
     * @return void
     */
    public function storeContributors(array $contributors)
    {
        foreach ($contributors as $contributor) {
            $this->insert([
                'username'      => $contributor['login'],
                'avatar_url'    => $contributor['avatar_url'],
                'profile_url'   => $contributor['html_url'],
                'contributions' => $contributor['contributions']
            ]);
        }
    }
}
