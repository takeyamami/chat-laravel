<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roomsTableSeeder extends Seeder
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
            'name' => "talk1",
        ];

        DB::table('rooms')->insert($param);
        
        //
        $param = [
            'name' => "talk__2",
        ];

        DB::table('rooms')->insert($param);
        
        //
        $param = [
            'name' => "トーーーク３",
        ];

        DB::table('rooms')->insert($param);

        //
        $param = [
            'name' => "ぶひひるーむ",
        ];

        DB::table('rooms')->insert($param);

        $param = [
            'name' => "ふんばばるーむ",
        ];

        DB::table('rooms')->insert($param);

        $param = [
            'name' => "ぼぼぼぼーう",
        ];

        DB::table('rooms')->insert($param);
    }
}
