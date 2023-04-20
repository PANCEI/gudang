<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{

    protected $table            = 'profil';
    protected $primaryKey       = 'id';

    protected $allowedFields    = ['profil'];

    // Dates
    protected $useTimestamps = true;

    protected $createdField  = 'profil_created_at';
    protected $updatedField  = 'profil_updated_at';
}
