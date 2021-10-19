<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =  array([
            'name' => 'Ahmed Bilal',
            'email' => 'ahmedbilal@bhatta.com',
            'password' => Hash::make('206445'),
        ]);
        $admin =  array([
            'name' => 'Ashfaq Ahmed',
            'email' => 'ashfaqahmed@bhatta.com',
            'password' => Hash::make('206445'),
        ]);
        $admin =  array([
            'name' => 'Zulfiqar Ahmed',
            'email' => 'zulfiqar@bhatta.com',
            'password' => Hash::make('206445'),
        ]);
        $admin =  array([
            'name' => 'Nasir Mehmood',
            'email' => 'nasirmehmood@bhatta.com',
            'password' => Hash::make('206445'),
        ]);
        DB::table('users')->insert($admin);
    }
}
