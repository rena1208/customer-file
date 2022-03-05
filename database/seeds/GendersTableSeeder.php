<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Gender;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                "id" => 1,
                "gender" => '男性',
            ],
            [
                "id" => 2,
                "gender" => '女性',
            ],
        ];

         DB::table('genders')->insert($data);
    }
}
