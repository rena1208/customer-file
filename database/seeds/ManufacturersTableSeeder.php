<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //メーカーのデータ
        $data = [
            [
                "id" => 1,
                "name" => '資生堂',
            ],
            [
                "id" => 2,
                "name" => 'カネボウ',
            ],
            [
                "id" => 3,
                "name" => 'コーセー',
            ],
            [
                "id" => 4,
                "name" => 'ソフィーナ',
            ],
            [
                "id" => 5,
                "name" => 'ロート',
            ],
        ];

         DB::table('manufacturers')->insert($data);
    }
}
