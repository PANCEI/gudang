<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Profil extends Seeder
{
    public function run()
    {
        $data = [
            "profil" => "Super Admin",
            "profil_created_at" => Time::now(),
            "profil_updated_at" => Time::now(),

        ];
        $this->db->table('profil')->insert($data);
    }
}
