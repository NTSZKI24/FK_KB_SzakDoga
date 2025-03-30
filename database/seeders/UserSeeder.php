<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Domnanovich Balint',
            'email' => 'domnanob@gmail.com',
            'password' => Hash::make('domnanob123'),
        ]);

        User::create([
            'name' => 'Balics Gabor',
            'email' => 'balicsg@gmail.com',
            'password' => Hash::make('balicsg123'),
        ]);
        User::create([
            'name' => 'Varga Gabor',
            'email' => 'vargag@gmail.com',
            'password' => Hash::make('vargag123'),
        ]);
    }
}
