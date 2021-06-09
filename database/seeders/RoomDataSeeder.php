<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => "ぶひひるーむ",
        ];

        DB::table('RoomData')->insert($param);

        $param = [
            'name' => "ふんばばるーむ",
        ];

        DB::table('RoomData')->insert($param);

        $param = [
            'name' => "ぼぼぼぼーう",
        ];

        DB::table('RoomData')->insert($param);
    }
}
