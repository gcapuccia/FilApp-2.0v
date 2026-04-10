<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]
            ->forgetCachedPermissions();

        // 1. permisos para ver
        Permission::create(['name' => 'ver clientes']);
        Permission::create(['name' => 'ver metricasone']);
        Permission::create(['name' => 'ver metricasall']);
        Permission::create(['name' => 'ver motivos']);
        Permission::create(['name' => 'ver empleados']);

        Permission::create(['name' => 'atender clientes']);
        Permission::create(['name' => 'crear empleados']);
        Permission::create(['name' => 'crear motivos']);

        Permission::create(['name' => 'eliminar motivos']);
        Permission::create(['name' => 'eliminar clientes']);
        Permission::create(['name' => 'eliminar empleados']);

        Permission::create(['name' => 'editar motivos']);
        Permission::create(['name' => 'editar clientes']);
        Permission::create(['name' => 'editar empleados']);

        // 2. Crear rol admin y darle TODOS los permisos
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        // 3. Crear rol editor con permisos específicos
        $editor = Role::create(['name' => 'supervisor']);
        $editor->givePermissionTo(Permission::all()->except(['eliminar clientes', 'eliminar empleados', 'editar clientes']));

        // 4. Crear rol viewer, solo lectura
        $viewer = Role::create(['name' => 'empleado']);
        $viewer->givePermissionTo(['ver metricasone', 'atender clientes']);
    }
}
