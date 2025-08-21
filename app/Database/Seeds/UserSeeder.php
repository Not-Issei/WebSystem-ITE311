<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'akosiadmin',
                'email'    => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'admin',
            ],
            [
                'name'     => 'Instructor Jim Jamero',
                'email'    => 'instructor@example.com',
                'password' => password_hash('teach123', PASSWORD_DEFAULT),
                'role'     => 'instructor',
            ],
            [
                'name'     => 'Student Krish',
                'email'    => 'student@example.com',
                'password' => password_hash('stud123', PASSWORD_DEFAULT),
                'role'     => 'student',
            ],
        ];

        $this->db->table('users')->truncate();

        $this->db->table('users')->insertBatch($data);
    }