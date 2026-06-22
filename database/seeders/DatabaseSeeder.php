<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@codetoinnovate.africa'],
            [
                'name'     => 'C2I Admin',
                'password' => Hash::make('C2I@Admin2026!'),
            ]
        );
    }
}
