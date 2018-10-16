<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = Role::create([
            'name' => 'Teacher', 
            'slug' => 'teacher'
        ]);
        $account = Role::create([
            'name' => 'Account', 
            'slug' => 'account'
            
        ]);
        $admin = Role::create([
            'name' => 'Admin', 
            'slug' => 'admin'
            
        ]);

    }
}
