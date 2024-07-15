<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'name' => 'guru',
                'email' => 'guru@gmail.com',
                'level' => 'guru',
                'password' => bcrypt('guru123')
            ],
            [
                'name' => 'siswa',
                'email' => 'siswa@gmail.com',
                'level' => 'siswa',
                'password' => bcrypt('siswa123')
            ]
        ];

        foreach($userdata as $key => $val){
            User::create($val);
        }
    }
}
