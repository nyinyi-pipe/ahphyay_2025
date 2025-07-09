<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SiteSettings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
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

        $superAdminRole = Role::create(['name' => 'superadmin']);
        $supplierRole = Role::create(['name' => 'supplier']);
        $userRole = Role::create(['name' => 'customer']);

        $permissions = [
            'create user',
            'view user',
            'update user',
            'delete user',
            'user status',
            'user role',
        ];

        foreach ($permissions as $permission) {
            $per = Permission::create(['name' => $permission]);
            $per->syncRoles($superAdminRole);
        }


        $superAdminRole->syncPermissions($permissions);


        $superadmin = \App\Models\User::create([
            'username'      => 'superadmin',
            'email'         => 'superadmin@gmail.com',
            'password'      => Hash::make('admin123'),
            'first_name'    => 'Super',
            'last_name'     => 'Admin',
            'phone'         => '1234567890',
            'gender'        => 'Male',
            'date_of_birth' => '1990-01-01',
            'is_active'     => true,
            'status'        => true,
            'is_verified'   => true,
            'email_verified_at' => now(),
            'last_login'    => now(),
        ]);
        $superadmin->assignRole('superadmin');

        $customer = \App\Models\User::create([
            'username'      => 'customer',
            'email'         => 'customer@gmail.com',
            'password'      => Hash::make('customer123'),
            'first_name'    => 'Normal',
            'last_name'     => 'User',
            'phone'         => '0987654321',
            'gender'        => 'Female',
            'date_of_birth' => '1990-01-01',
            'is_active'     => true,
            'status'        => true,
            'is_verified'   => true,
            'email_verified_at' => now(),
            'last_login'    => now(),
        ]);
        $customer->assignRole('customer');

        $supplier = \App\Models\User::create([
            'username'      => 'supplier',
            'email'         => 'supplier@gmail.com',
            'password'      => Hash::make('supplier123'),
            'first_name'    => 'Normal',
            'last_name'     => 'User',
            'phone'         => '0987654321',
            'gender'        => 'Female',
            'date_of_birth' => '1990-01-01',
            'is_active'     => true,
            'status'        => true,
            'is_verified'   => true,
            'email_verified_at' => now(),
            'last_login'    => now(),
        ]);
        $supplier->assignRole('supplier');

        SiteSettings::create([
            'key' => 'logo',
            'value' => '/bootstrap/img/logo-white-trans.png',
            'type' => 'image'
        ]);
    }
}
