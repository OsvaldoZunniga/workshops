<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['first_name' => 'Katherine', 'email' => 'katherine@gmail.com', 'last_name' => 'Solis']
        ];

        $this->db->table('students')->insertBatch($data);
    }
}
