<?php

use App\User;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Progressing',
              
            ],
            [
                'id'             => 2,
                'name'           => 'Not Recived',
            
            ],
            [
                'id'             => 3,
                'name'           => 'Canceld',
            
            ],
            [
                'id'             => 4,
                'name'           => 'Verfied',
            
            ],
        ];

        User::insert($users);

    }
}
