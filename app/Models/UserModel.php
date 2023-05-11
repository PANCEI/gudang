<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['id_profil', 'username', 'password', 'telpon', 'aktif', 'foto'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'user_created_at';
    protected $updatedField  = 'user_updated_at';

    // join table 
    protected $table2   = "profil";
    protected $on       = "profil.id_profil = user.id_profil";
    protected $table3 = "gudang";
    protected $on2 = "gudang.id_gudang = user.id_gudang";

    public function getUsername($username)
    {
        return $this->where(['username' => $username])
            ->join($this->table2, $this->on)
            ->join($this->table3, $this->on2)
            ->first();
    }
}
