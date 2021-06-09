<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'uid' => 4,
            'loginid' => hash('sha256', 'aaa@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "ぽぴぽぴ",
        ];

        DB::table('UserData')->insert($param);

        $param = [
            'uid' => 5,
            'loginid' => hash('sha256', 'bbb@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "ぶひぶひ",
        ];

        DB::table('UserData')->insert($param);

        $param = [
            'uid' => 6,
            'loginid' => hash('sha256', 'ccc@gmail.com'),
            'loginpw' =>  hash('sha256', '123456'),
            'name' => "ぺぽぺぽ",
        ];

        DB::table('UserData')->insert($param);
    }
}
