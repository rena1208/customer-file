<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //カテゴリーのデータ
        $data = [
            [
                "id" => 1,
                "categories" => 'メイク落とし',
            ],
            [
                "id" => 2,
                "categories" => '洗顔料',
            ],
            [
                "id" => 3,
                "categories" => '化粧水',
            ],
            [
                "id" => 4,
                "categories" => '乳液・クリーム',
            ],
            [
                "id" => 5,
                "categories" => 'UVケア',
            ],
            [
                "id" => 6,
                "categories" => 'スペシャルケア 美白',

            ],
            [
                "id" => 13,
                "categories" => 'スペシャルケア　保湿',
            ],
            [
                "id" => 14,
                "categories" => 'スペシャルケア　ハリ',
            ],
            [
                "id" => 15,
                "categories" => 'スペシャルケア　毛穴',
            ],
            [
                "id" => 7,
                "categories" => 'ファンデーション',
            ],
            [
                "id" => 8,
                "categories" => '下地、フェイスパウダー、その他',
            ],
            [
                "id" => 9,
                "categories" => 'アイメイク',
            ],
            [
                "id" => 10,
                "categories" => 'アイブロウ（眉ずみ）',
            ],
            [
                "id" => 11,
                "categories" => 'リップ',
            ],
            [
                "id" => 12,
                "categories" => 'チーク、その他',
            ],
        ];

         DB::table('categories')->insert($data);
    }
}
