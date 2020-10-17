<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array = [];
        array_push($permissions_array,Permission::create(['name' => 'crear_usuario']));
        array_push($permissions_array,Permission::create(['name' => 'editar_usuario']));
        array_push($permissions_array,Permission::create(['name' => 'delete_usuario']));
        $viewUusario =Permission::create(['name' => 'view_usuario']);
        array_push($permissions_array,$viewUusario);
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->syncPermissions($permissions_array);
        $colaboradorRole = Role::create(['name' => 'colaborador']);
        $colaboradorRole->givePermissionTo($viewUusario);

        $useradmin = User::create([           
            'name' =>'admin',
            'email' => 'admin@admin.com',
            'genero' => 'hombre',
            'cumpleaños' => '24/04/2000',
            'password' => Hash::make('admin'),
        ]);
        $useradmin->assignRole('admin');

        $userColaborador = User::create([           
            'name' =>'admin2',
            'email' => 'admin2@admin.com',
            'genero' => 'hombre',
            'cumpleaños' => '246/04/2000',
            'password' => Hash::make('admin2'),
        ]);
        $userColaborador->assignRole('colaborador');
    }
}