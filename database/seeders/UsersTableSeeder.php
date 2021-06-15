<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'uid' => 1,
            'loginid' => hash('sha256', 'abc@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "yammer",
        ];

        DB::table('users')->insert($param);

        $param = [
            'uid' => 2,
            'loginid' => hash('sha256', 'efg@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "yamamo",
        ];

        DB::table('users')->insert($param);

        $param = [
            'uid' => 3,
            'loginid' => hash('sha256', 'hij@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "momimomi",
        ];

        DB::table('users')->insert($param);
        $param = [
            'uid' => 4,
            'loginid' => hash('sha256', 'aaa@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "ぽぴぽぴ",
        ];

        DB::table('users')->insert($param);

        $param = [
            'uid' => 5,
            'loginid' => hash('sha256', 'bbb@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "ぶひぶひ",
        ];

        DB::table('users')->insert($param);

        $param = [
            'uid' => 6,
            'loginid' => hash('sha256', 'ccc@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "ぺぽぺぽ",
        ];

        DB::table('users')->insert($param);
    }
}
