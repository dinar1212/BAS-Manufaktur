<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**3
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@example',
            'password' => Hash::make('12345678'),
        ]);

        $admin->assignRole('admin');


        $hrd = User::create([
            'name' => 'hrd',
            'email' => 'hrd@example',
            'password' => Hash::make('12345678'),
        ]);

        $hrd->assignRole('hrd');

        $accounting = User::create([
            'name' => 'accounting',
            'email' => 'accounting@example',
            'password' => Hash::make('12345678'),
        ]);

        $accounting->assignRole('accounting');
    }
}
