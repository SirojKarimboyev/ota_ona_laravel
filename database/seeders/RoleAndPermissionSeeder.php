<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ruxsatlar yaratish
        Permission::create(['name' => 'create explanation']);
        Permission::create(['name' => 'edit explanation']);
        Permission::create(['name' => 'delete explanation']);

        // Rollar yaratish va ularga ruxsatlarni biriktirish
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(['create explanation', 'edit explanation', 'delete explanation']);

    
    }
}
