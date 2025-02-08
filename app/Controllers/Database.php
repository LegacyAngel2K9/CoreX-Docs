<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Database\Database;
use CodeIgniter\HTTP\ResponseInterface;

class Database extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    /**
     * Database Guide Page
     */
    public function index()
    {
        return view('docs/database');
    }

    /**
     * Fetch All Database Tables
     * Returns JSON response with a list of all database tables.
     */
    public function getTables()
    {
        $tables = $this->db->listTables();

        return $this->response
            ->setStatusCode(ResponseInterface::HTTP_OK)
            ->setJSON(['tables' => $tables]);
    }

    /**
     * Fetch Table Structure
     * Returns JSON response with the structure of a given table.
     *
     * @param string $tableName
     * @return ResponseInterface
     */
    public function getTableStructure($tableName)
    {
        if (!$this->db->tableExists($tableName)) {
            return $this->response
                ->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                ->setJSON(['error' => 'Table not found']);
        }

        $fields = $this->db->getFieldData($tableName);

        return $this->response
            ->setStatusCode(ResponseInterface::HTTP_OK)
            ->setJSON(['table' => $tableName, 'fields' => $fields]);
    }

    /**
     * Fetch Table Data
     * Returns JSON response with data from a given table (limited results).
     *
     * @param string $tableName
     * @return ResponseInterface
     */
    public function getTableData($tableName)
    {
        if (!$this->db->tableExists($tableName)) {
            return $this->response
                ->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                ->setJSON(['error' => 'Table not found']);
        }

        $query = $this->db->table($tableName)->limit(10)->get();
        $result = $query->getResult();

        return $this->response
            ->setStatusCode(ResponseInterface::HTTP_OK)
            ->setJSON(['table' => $tableName, 'data' => $result]);
    }
}
