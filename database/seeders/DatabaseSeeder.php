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
                ['role_code' => $role['role_code']],
                ['name' => $role['name']]
            );
        }

        // Get Super Admin role ID
        $superAdminRoleId = DB::table('roles')
            ->where('role_code', 'super_admin')
            ->value('id');

        // Seed default Super Admin user
        DB::table('users')->updateOrInsert(
            ['email' => 'sadmin@yopmail.com'],
            [
                'name' => 'Super Admin',
                'email' => 'sadmin@yopmail.com',
                'password' => bcrypt('12345678'),
                'role_id' => $superAdminRoleId,
                'status' => true,
                'is_email_verified' => true,
                'is_phone_verified' => true,
                'email_verified_at' => now(),
                'created_at' => now(),
            ]
        );
    }
}
