<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomMemberDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $param = [
            'rid' => 4,
            'uid' => 3,
        ];

        DB::table('RoomMemberData')->insert($param);
        
        $param = [
            'rid' => 4,
            'uid' => 4,
        ];

        DB::table('RoomMemberData')->insert($param);
        
        $param = [
            'rid' => 4,
            'uid' => 5,
        ];

        DB::table('RoomMemberData')->insert($param);
        
        $param = [
            'rid' => 4,
            'uid' => 6,
        ];

        DB::table('RoomMemberData')->insert($param);
        
        $param = [
            'rid' => 5,
            'uid' => 3,
        ];

        DB::table('RoomMemberData')->insert($param);
        
        $param = [
            'rid' => 5,
            'uid' => 6,
        ];

        DB::table('RoomMemberData')->insert($param);
        
        
        $param = [
            'rid' => 6,
            'uid' => 1,
        ];

        DB::table('RoomMemberData')->insert($param);
        
        
        $param = [
            'rid' => 6,
            'uid' => 4,
        ];

        DB::table('RoomMemberData')->insert($param);
    }
}
