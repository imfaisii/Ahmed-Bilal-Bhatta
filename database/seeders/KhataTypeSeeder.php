<?php

namespace Database\Seeders;

use App\Models\KhataType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhataTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $khataTypes = array([
            'name' => 'Shop Khata',
            'description' => 'Dukan se jo saman laya jata h us ka khata'
        ], [
            'name' => 'Baatha Khata',
            'description' => 'Bhatay k kharchy ka khata'
        ], [
            'name' => 'Diesel Khata',
            'description' => 'Saaari machinery k diesel ka khata'
        ], [
            'name' => 'Peeter Khata',
            'description' => 'Peeter py lgny waly paiso ka khata'
        ], [
            'name' => 'Excavator Khata',
            'description' => 'Crane py lgny waly paiso ka khata'
        ], [
            'name' => 'Tractor 6762 Khata',
            'description' => '6762 Tractor ka khata'
        ], [
            'name' => 'Tractor Ghazi Khata',
            'description' => 'Tractor Ghazi ka khata'
        ], [
            'name' => 'Adeel Motorcycle Khata',
            'description' => 'Adeel k motorcycle ka khata'
        ], [
            'name' => 'Ahmed Bilal transport Khata',
            'description' => 'Bilal k ghar aany jany ka khata'
        ], [
            'name' => 'Chaudhary Zulfiqar Ahmed Khata',
            'description' => 'Chaudhary Zulfiqar k aany jany ka khata'
        ]);
        DB::table('khata_types')->insert($khataTypes);
    }
}
