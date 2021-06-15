<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        $param = [
            'rid' => 1,
            'uid' => 1,
        ];

        DB::table('room_members')->insert($param);
 
        $param = [
            'rid' => 1,
            'uid' => 2,
        ];

        DB::table('room_members')->insert($param);
 
        $param = [
            'rid' => 1,
            'uid' => 3,
        ];

        DB::table('room_members')->insert($param);
 

        $param = [
            'rid' => 2,
            'uid' => 1,
        ];

        DB::table('room_members')->insert($param);
 
        $param = [
            'rid' => 2,
            'uid' => 2,
        ];

        DB::table('room_members')->insert($param);
 

        $param = [
            'rid' => 3,
            'uid' => 1,
        ];

        DB::table('room_members')->insert($param);
 
        $param = [
            'rid' => 3,
            'uid' => 3,
        ];

        DB::table('room_members')->insert($param);
 
        $param = [
            'rid' => 4,
            'uid' => 3,
        ];

        DB::table('room_members')->insert($param);
        
        $param = [
            'rid' => 4,
            'uid' => 4,
        ];

        DB::table('room_members')->insert($param);
        
        $param = [
            'rid' => 4,
            'uid' => 5,
        ];

        DB::table('room_members')->insert($param);
        
        $param = [
            'rid' => 4,
            'uid' => 6,
        ];

        DB::table('room_members')->insert($param);
        
        $param = [
            'rid' => 5,
            'uid' => 3,
        ];

        DB::table('room_members')->insert($param);
        
        $param = [
            'rid' => 5,
            'uid' => 6,
        ];

        DB::table('room_members')->insert($param);
        
        
        $param = [
            'rid' => 6,
            'uid' => 1,
        ];

        DB::table('room_members')->insert($param);
        
        
        $param = [
            'rid' => 6,
            'uid' => 4,
        ];

        DB::table('room_members')->insert($param);

    }
}
