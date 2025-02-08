<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentationModel extends Model
{
    protected $table = 'documentation';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'content', 'category', 'created_at', 'updated_at'];

    /**
     * Get all documentation entries.
     *
     * @return array
     */
    public function getAllDocs()
    {
        return $this->orderBy('category', 'ASC')->findAll();
    }

    /**
     * Get a single documentation entry by slug.
     *
     * @param string $slug
     * @return array|null
     */
    public function getDocBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }

    /**
     * Search documentation by keyword.
     *
     * @param string $keyword
     * @return array
     */
    public function searchDocs($keyword)
    {
        return $this->like('title', $keyword)
                    ->orLike('content', $keyword)
                    ->findAll();
    }

    /**
     * Insert a new documentation entry.
     *
     * @param array $data
     * @return bool
     */
    public function addDoc($data)
    {
        return $this->insert($data);
    }

    /**
     * Update an existing documentation entry.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateDoc($id, $data)
    {
        return $this->update($id, $data);
    }

    /**
     * Delete a documentation entry.
     *
     * @param int $id
     * @return bool
     */
    public function deleteDoc($id)
    {
        return $this->delete($id);
    }
}
