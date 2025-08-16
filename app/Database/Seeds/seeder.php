<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'ADMIN',
                'email'    => 'admin123@example.com',
                'role'     => 'admin',
                'password' => password_hash('password', PASSWORD_DEFAULT)
            ],
            [
                'name'     => 'Krish Student',
                'email'    => 'student@example.com',
                'role'     => 'student',
                'password' => password_hash('password', PASSWORD_DEFAULT)
            ],
            [
                'name'     => 'Jim Jamero Instructor',
                'email'    => 'instructor@example.com',
                'role'     => 'instructor',
                'password' => password_hash('password', PASSWORD_DEFAULT)
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
