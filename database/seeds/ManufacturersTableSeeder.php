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
                "manufacturers" => '資生堂',
            ],
            [
                "id" => 2,
                "manufacturers" => 'カネボウ',
            ],
            [
                "id" => 3,
                "manufacturers" => 'コーセー',
            ],
            [
                "id" => 4,
                "manufacturers" => 'ソフィーナ',
            ],
            [
                "id" => 5,
                "manufacturers" => 'ロート',
            ],
        ];

         DB::table('manufacturers')->insert($data);
    }
}
