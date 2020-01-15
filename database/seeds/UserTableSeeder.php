<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'    =>'Roberto',
        	'lastname'=>'Micheletti',
        	'dni'     =>'22465870',
        	'email'   =>'robertomicheletti@yahoo.com',
        	'password'=>Hash::make('12345678'),
        ])->assignRoles('Admin');

        User::create([
        	'name'    =>'alberto',
        	'lastname'=>'nicanor',
        	'dni'	  =>'26485348',
        	'email'	  =>'nicanoralberto@gmail.com',
        	'password'=>Hash::make('12345678'),
        ]);
        factory(User::class,60)->create();
    }
}
