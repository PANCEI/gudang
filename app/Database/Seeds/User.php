<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class User extends Seeder
{
    public function run()
    {
        $data = [
            "username" => "aswar",
            "id_profil" => 1,
            "password" => "$2y$10$6E0X0b2I7yMzc9wrOHOHDu0jUHpuiK0.p.2oKN.LoBHBPsT24kfzW ",
            "telpon" => "081343469728",
            "aktif" => 1,
            "foto" => "default.png",
            "user_created_at" => Time::now(),
            "user_updated_at" => Time::now(),

        ];
        $this->db->table('user')->insert($data);
    }
}
