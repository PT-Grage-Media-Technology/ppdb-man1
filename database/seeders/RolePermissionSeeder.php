<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create roles+
        $adminRole = Role::create(['name' => 'admin']);
        $pesertaRole = Role::create(['name' => 'peserta']);

        // Assign permissions to roles
        $adminRole->givePermissionTo(['list-peserta']);
        $pesertaRole->givePermissionTo(['formulir-pendaftaran']);
    }
}
