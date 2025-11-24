<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
         $data = [
            ['name' => 'Admin', 'email' => 'admin@gmail.com']
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
