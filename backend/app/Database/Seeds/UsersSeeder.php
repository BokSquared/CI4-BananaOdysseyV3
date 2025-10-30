<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);
        $password1 = password_hash('admin11', PASSWORD_DEFAULT);

        $data = [
            [
                'first_name'       => 'Wybie',
                'middle_name'      => 'Andres',
                'last_name'        => 'Japon',
                'email'            => 'wybie@example.com',
                'password_hash'    => $password,
                'type'             => 'client',
                'account_status'   => 1,
                'email_activated'  => 1,
                'newsletter'       => 1,
                'gender'           => 'Male',
                'profile_image'    => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YmFuYW5hfGVufDB8fDB8fHww&fm=jpg&q=60&w=3000',
                'created_at'       => $now,
                'updated_at'       => $now,
            ],
            [
                'first_name'       => 'Jordie',
                'middle_name'      => 'Shipmate',
                'last_name'        => 'Hooray',
                'email'            => 'jordie@example.com',
                'password_hash'    => $password1,
                'type'             => 'admin',
                'account_status'   => 1,
                'email_activated'  => 1,
                'newsletter'       => 0,
                'gender'           => 'Male',
                'profile_image'    => 'https://zamaorganics.com/cdn/shop/files/banana1000_x_1000_px_1.png?v=1752738968',
                'created_at'       => $now,
                'updated_at'       => $now,
            ]
        ];

        // Insert all records at once
        $this->db->table('users')->insertBatch($data);
    }
}
