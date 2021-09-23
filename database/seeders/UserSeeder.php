<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(1)->create(
            [
                'nama_lengkap' => 'Admin',
                'email' => 'admin@email.com',
                'username' => 'admin',
            ]
        )->each(function ($user) {
            $user->assignRole('admin');
        });

        $user = User::factory(1)->create(
            [
                'nama_lengkap' => 'SDM',
                'email' => 'sdm@email.com',
                'username' => 'sdm',
            ]
        )->each(function ($user) {
            $user->assignRole('sdm');
        });

        User::factory(10)->create()->each(function ($user) {
            $user->assignRole('anggota');
        });;
    }
}
