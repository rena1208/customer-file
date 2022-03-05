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
                "manufacturer" => '資生堂',
            ],
            [
                "id" => 2,
                "manufacturer" => 'カネボウ',
            ],
            [
                "id" => 3,
                "manufacturer" => 'コーセー',
            ],
            [
                "id" => 4,
                "manufacturer" => 'ソフィーナ',
            ],
            [
                "id" => 5,
                "manufacturer" => 'ロート',
            ],
        ];

         DB::table('manufacturers')->insert($data);
    }
}
