<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
use App\Models\User;


class UserSeeder extends Seeder
{   
    public function run()
    {
        $faker = Factory::create('id_ID');
        $user = new User();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => password_hash('password', PASSWORD_DEFAULT),
            ];
            $user->insert($data);
        }
    }
}
