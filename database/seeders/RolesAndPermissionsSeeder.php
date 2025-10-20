<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Crear Permisos
        Permission::create(['name' => 'crear articulos']);
        Permission::create(['name' => 'editar articulos']);
        Permission::create(['name' => 'eliminar articulos']);
        Permission::create(['name' => 'ver dashboard']);

        // Crear Roles y asignar permisos existentes
        $role = Role::create(['name' => 'Editor']);
        $role->givePermissionTo(['crear articulos', 'editar articulos']);

        $role = Role::create(['name' => 'Moderador']);
        $role->givePermissionTo('eliminar articulos');

        $role = Role::create(['name' => 'Super-Admin']);
        $role->givePermissionTo(Permission::all()); // Le da todos los permisos
    }
}