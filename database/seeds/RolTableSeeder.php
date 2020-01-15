<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Role::create([
    		'name' 		=> 'Admin',
    		'slug' 		=> 'admin',
    		'special' 	=> 'all-access',
    	]);
        Role::create([
            'name'      => 'Disable',
            'slug'      => 'disable',
            'special'   => 'no-access',
        ]);
    }
}
