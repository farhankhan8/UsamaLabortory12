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
                'phone'          => '03053183069',
                'start_time'     => '2021-04-12-16-50-00',
                'password'       => '$2y$10$VOunUZVMv4bwC84FJngVdORh/3WOQsLYXcHOTcmsVFWTVWWg.V8/i',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Receptionest',
                'phone'          => '03053183069',
                'start_time'     => '2021-04-12-16-50-00',
                'email'          => 'receptionest@receptionest.com',
                'password'       => '$2y$10$VOunUZVMv4bwC84FJngVdORh/3WOQsLYXcHOTcmsVFWTVWWg.V8/i',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
