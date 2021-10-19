<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestrictionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $access =  array(
            [
                'access' => true,
                'user_id' => 1,
            ],
            [
                'access' => true,
                'user_id' => 2,
            ],
            [
                'access' => false,
                'user_id' => 3,
            ],
            [
                'access' => false,
                'user_id' => 4,
            ],
        );
        DB::table('restrictions')->insert($access);
    }
}
