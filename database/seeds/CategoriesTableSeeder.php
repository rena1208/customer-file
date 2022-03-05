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
                "category" => 'メイク落とし',
            ],
            [
                "id" => 2,
                "category" => '洗顔料',
            ],
            [
                "id" => 3,
                "category" => '化粧水',
            ],
            [
                "id" => 4,
                "category" => '乳液・クリーム',
            ],
            [
                "id" => 16,
                "category" => 'オールインワン、その他',
            ],
            [
                "id" => 5,
                "category" => 'UVケア',
            ],
            [
                "id" => 6,
                "category" => 'スペシャルケア 美白',

            ],
            [
                "id" => 13,
                "category" => 'スペシャルケア　保湿',
            ],
            [
                "id" => 14,
                "category" => 'スペシャルケア　ハリ',
            ],
            [
                "id" => 15,
                "category" => 'スペシャルケア　毛穴',
            ],
            [
                "id" => 7,
                "category" => 'ファンデーション',
            ],
            [
                "id" => 8,
                "category" => '下地、フェイスパウダー、その他',
            ],
            [
                "id" => 9,
                "category" => 'アイメイク',
            ],
            [
                "id" => 10,
                "category" => 'アイブロウ（眉ずみ）',
            ],
            [
                "id" => 11,
                "category" => 'リップ',
            ],
            [
                "id" => 12,
                "category" => 'チーク、その他',
            ],
        ];

         DB::table('categories')->insert($data);
    }
}
