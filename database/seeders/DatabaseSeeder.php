<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create(
            ['name' => RolesEnum::ADMIN->value]
        );

        User::create([
            'name'=>env('ADMIN_NAME'),
            'email'=>env('ADMIN_EMAIL'),
            'password'=>Hash::make(env('ADMIN_PASSWORD')),
        ])->assignRole(Role::firstWhere('name', RolesEnum::ADMIN->value));

    }
}
