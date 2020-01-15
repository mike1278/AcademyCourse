<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//permisos
        Permission::create([
        	'name'		 =>'Ver todos usuarios',
        	'slug'		 =>'users.index',
        	'description'=>'Ver la informacion de los usuarios',
        ]);
        Permission::create([
        	'name'		 =>'Eliminar usuarios',
        	'slug'		 =>'users.destroy',
        	'description'=>'Eliminar un usuario',
        ]);
        Permission::create([
        	'name'		 =>'Ver en detalle un usuario',
        	'slug'		 =>'users.show',
        	'description'=>'Ver la informacion detallada de un usuario',
        ]);
        Permission::create([
        	'name'		 =>'status de un usuario',
        	'slug'		 =>'users.status',
        	'description'=>'Desabilitar o habilitar un usuario',
        ]);
    }
}
