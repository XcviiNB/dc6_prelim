<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleandPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'      => 'User',
            'email'     => 'user@email.com',
            'password'  => bcrypt('Password123')
        ]);

        $user1 = User::create([
            'name'      => 'Supplier',
            'email'     => 'supplier@email.com',
            'password'  => bcrypt('Password123')
        ]);

        // $admin = Role::create(['name' => 'admin']);
        $supplier = Role::create(['name' => 'supplier']);

        $view_supplies = Permission::create(['name' => 'view-supplies']);

        $supplier->givePermissionTo($view_supplies);

        $user1->assignRole($supplier);
    }
}
