<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(
            function() {
                Permission::create(['name' => 'add-menu']);
        
                Role::create(['name' => 'admin'])->givePermissionTo('add-menu');
        
                User::create([
                    'name' => 'Administrator', 
                    'email' => 'administrator@example.com',
                    'password' => bcrypt('password')
                ])->assignRole('admin');
            }
        ); 
    }
}
