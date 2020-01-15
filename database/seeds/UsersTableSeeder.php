<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$9BSa4Fz.p5XXKQUIm.ITHeoF7AbEhx0tTNaIBOMl6QlsBdLNV/qyi',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
