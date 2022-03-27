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
                "name" => 'メイク落とし',
            ],
            [
                "id" => 2,
                "name" => '洗顔料',
            ],
            [
                "id" => 3,
                "name" => '化粧水',
            ],
            [
                "id" => 4,
                "name" => '乳液・クリーム',
            ],
            [
                "id" => 16,
                "name" => 'オールインワン、その他',
            ],
            [
                "id" => 5,
                "name" => 'UVケア',
            ],
            [
                "id" => 6,
                "name" => 'スペシャルケア 美白',

            ],
            [
                "id" => 13,
                "name" => 'スペシャルケア　保湿',
            ],
            [
                "id" => 14,
                "name" => 'スペシャルケア　ハリ',
            ],
            [
                "id" => 15,
                "name" => 'スペシャルケア　毛穴',
            ],
            [
                "id" => 7,
                "name" => 'ファンデーション',
            ],
            [
                "id" => 8,
                "name" => '下地、フェイスパウダー、その他',
            ],
            [
                "id" => 9,
                "name" => 'アイメイク',
            ],
            [
                "id" => 10,
                "name" => 'アイブロウ（眉ずみ）',
            ],
            [
                "id" => 11,
                "name" => 'リップ',
            ],
            [
                "id" => 12,
                "name" => 'チーク、その他',
            ],
        ];

         DB::table('categories')->insert($data);
    }
}
