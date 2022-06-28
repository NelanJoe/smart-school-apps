<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'  => 'admin@gmail.com',
                'username' => 'admin',
                'password_hash'  =>  '$2y$10$nqAaVKoNWmiWEsDv4vVokeLbwZhKYGU5MtzGkeMnfUu6Oezhq3t/e',
                'active' => 1,
                'force_pass_reset' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email'  => 'user@gmail.com',
                'username' => 'user',
                'password_hash'  =>  password_hash('user123', PASSWORD_DEFAULT),
                'active' => 1,
                'force_pass_reset' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
