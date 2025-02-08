<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentationModel extends Model
{
    protected $table = 'docs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'slug', 'created_at', 'updated_at'];
}
