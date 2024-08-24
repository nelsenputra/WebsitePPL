<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Dosen 1',
               'email'=>'dosen1@gmail.com',
               'username'=>'dosen1',
               'password'=> bcrypt('dosen123'),
            ],
            [
                'name'=>'Dosen 2',
                'email'=>'dosen2@gmail.com',
                'username'=>'dosen2',
                'password'=> bcrypt('dosen231'),
             ]
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
