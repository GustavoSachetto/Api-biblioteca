<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gustavo Sachetto da Cruz',
            'email' => 'gustavosachetto@gmail.com',
            'password' => Hash::make('admin')
        ])->givePermissionTo('admin');

        User::create([
            'name' => 'Fernandez José Lachetto',
            'email' => 'fernandezjose@gmail.com',
            'password' => Hash::make('moderator')
        ])->givePermissionTo('moderator');

        User::create([
            'name' => 'André Luiz da Silva',
            'email' => 'andreluiz@gmail.com',
            'password' => Hash::make('student')
        ])->givePermissionTo('student');
    }
}
