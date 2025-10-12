<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed roles from constants
        $roles = config('constants.roles');
        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['code' => $role['code']],
                ['name' => $role['name']]
            );
        }

        // Seed default Super Admin user
        DB::table('users')->updateOrInsert(
            ['email' => 'sadmin@yopmail.com'],
            [
                'name' => 'Super Admin',
                'email' => 'sadmin@yopmail.com',
                'password' => bcrypt('12345678'),
                'role_id' => DB::table('roles')->where('code', 'super_admin')->value('id'),
                'status' => true,
                'is_email_verified' => true,
                'is_phone_verified' => true,
                'email_verified_at' => now(),
                'created_at' => now(),
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'demo@yopmail.com'],
            [
                'name' => 'Demo',
                'email' => 'demo@yopmail.com',
                'password' => bcrypt('12345678'),
                'role_id' => DB::table('roles')->where('code', 'user')->value('id'),
                'status' => true,
                'is_email_verified' => true,
                'is_phone_verified' => true,
                'email_verified_at' => now(),
                'created_at' => now(),
            ]
        );
    }
}
