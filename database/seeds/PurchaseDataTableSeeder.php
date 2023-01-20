<?php

use Illuminate\Database\Seeder;

class PurchaseDataTableSeeder extends Seeder
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
            //お客様のデータ 神田かずみ
            [
                "id" => 1,
                "customer_id" => 1,
                "date" => '2022-01-10',
                "comment" => '悩：ハリ、エイジングケアがしたい',
                "sample" => 'オバジC２５'
            ],
            [
                "id" => 2,
                "customer_id" => 1,
                "date" => '2022-03-15',
                "comment" => 'ハリのケア、美白ケアでオバジC２５購入していただきました',
                "sample" => ''
            ],
            [
                "id" => 3,
                "customer_id" => 1,
                "date" => '2022-07-26',
                "comment" => '前回と同じものを購入',
                "sample" => ''
            ],
            [
                "id" => 4,
                "customer_id" => 1,
                "date" => '2022-11-10',
                "comment" => '前回と同じものを購入',
                "sample" => ''
            ],
            [
                "id" => 5,
                "customer_id" => 1,
                "date" => '2023-01-26',
                "comment" => '前回と同じものを購入',
                "sample" => ''
            ],
            //お客様のデータ 進藤ひかる
            [
                "id" => 6,
                "customer_id" => 2,
                "date" => '2022-04-10',
                "comment" => '悩：くすみ、乾燥',
                "sample" => 'EIS洗顔フォーム'
            ],
            [
                "id" => 7,
                "customer_id" => 2,
                "date" => '2022-08-01',
                "comment" => '前回と同じものを購入',
                "sample" => ''
            ],
            [
                "id" => 8,
                "customer_id" => 2,
                "date" => '2022-11-10',
                "comment" => 'キャンペーンのためまとめて購入',
                "sample" => ''
            ],
            //お客様のデータ 後藤里恵
            [
                "id" => 9,
                "customer_id" => 3,
                "date" => '2022-10-25',
                "comment" => '素肌っぽく仕上がる薄づきのファンデーションをお探し',
                "sample" => ''
            ],
            //お客様のデータ 安藤桜
            [
                "id" => 10,
                "customer_id" => 4,
                "date" => '2021-12-10',
                "comment" => '',
                "sample" => ''
            ],
            [
                "id" => 11,
                "customer_id" => 4,
                "date" => '2022-02-20',
                "comment" => '',
                "sample" => ''
            ],
            [
                "id" => 12,
                "customer_id" => 4,
                "date" => '2022-06-10',
                "comment" => 'キャンペーンのためまとめて購入',
                "sample" => ''
            ],
            [
                "id" => 13,
                "customer_id" => 4,
                "date" => '2022-11-26',
                "comment" => 'キャンペーンのためまとめて購入',
                "sample" => ''
            ],
            [
                "id" => 14,
                "customer_id" => 4,
                "date" => '2023-02-10',
                "comment" => 'ハリの美容液をお探し',
                "sample" => ''
            ],
            //お客様のデータ 田中桃
            [
                "id" => 15,
                "customer_id" => 5,
                "date" => '2023-01-26',
                "comment" => '悩：毛穴の黒ずみ',
                "sample" => ''
            ],
            //お客様のデータ 佐藤絵梨花
            [
                "id" => 16,
                "customer_id" => 6,
                "date" => '2022-09-18',
                "comment" => '悩:毛穴、くすみ',
                "sample" => 'オバジアクティブベース化粧水、乳液'
            ],
            [
                "id" => 17,
                "customer_id" => 6,
                "date" => '2022-11-01',
                "comment" => '前回サンプリングした化粧水と乳液も購入していただきました',
                "sample" => ''
            ],
            //お客様のデータ 栗花落カナヲ
            [
                "id" => 18,
                "customer_id" => 2,
                "date" => '2023-03-23',
                "comment" => '新生活に向けてメイク品一式購入です',
                "sample" => ''
            ],
        ];
        DB::table('purchase_data')->insert($data);
    }
}
