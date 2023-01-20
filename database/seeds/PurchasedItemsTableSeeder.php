<?php

use Illuminate\Database\Seeder;

class PurchasedItemsTableSeeder extends Seeder
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
                "purchase_data_id" => 1,
                "item_id" => 65,
                "quantity" => 1,
            ],
            [
                "id" => 2,
                "purchase_data_id" => 1,
                "item_id" => 66,
                "quantity" => 1,
            ],
            [
                "id" => 3,
                "purchase_data_id" => 2,
                "item_id" => 65,
                "quantity" => 1,
            ],
            [
                "id" => 4,
                "purchase_data_id" => 2,
                "item_id" => 66,
                "quantity" => 1,
            ],
            [
                "id" => 5,
                "purchase_data_id" => 2,
                "item_id" => 75,
                "quantity" => 1,
            ],
            [
                "id" => 6,
                "purchase_data_id" => 3,
                "item_id" => 65,
                "quantity" => 1,
            ],
            [
                "id" => 7,
                "purchase_data_id" => 3,
                "item_id" => 66,
                "quantity" => 1,
            ],
            [
                "id" => 8,
                "purchase_data_id" => 3,
                "item_id" => 75,
                "quantity" => 2,
            ],
            [
                "id" => 9,
                "purchase_data_id" => 4,
                "item_id" => 65,
                "quantity" => 2,
            ],
            [
                "id" => 10,
                "purchase_data_id" => 4,
                "item_id" => 66,
                "quantity" => 2,
            ],
            [
                "id" => 11,
                "purchase_data_id" => 5,
                "item_id" => 75,
                "quantity" => 1,
            ],
            //お客様のデータ 進藤ひかる
            [
                "id" => 12,
                "purchase_data_id" => 6,
                "item_id" => 8,
                "quantity" => 1,
            ],
            [
                "id" => 13,
                "purchase_data_id" => 6,
                "item_id" => 10,
                "quantity" => 1,
            ],
            [
                "id" => 14,
                "purchase_data_id" => 7,
                "item_id" => 8,
                "quantity" => 1,
            ],
            [
                "id" => 15,
                "purchase_data_id" => 7,
                "item_id" => 10,
                "quantity" => 1,
            ],
            [
                "id" => 16,
                "purchase_data_id" => 8,
                "item_id" => 8,
                "quantity" => 3,
            ],
            [
                "id" => 17,
                "purchase_data_id" => 8,
                "item_id" => 10,
                "quantity" => 2,
            ],
            //お客様のデータ 後藤里恵
            [
                "id" => 18,
                "purchase_data_id" => 9,
                "item_id" => 23,
                "quantity" => 1,
            ],
            [
                "id" => 19,
                "purchase_data_id" => 9,
                "item_id" => 28,
                "quantity" => 1,
            ],
            //お客様のデータ 安藤桜
            [
                "id" => 20,
                "purchase_data_id" => 10,
                "item_id" => 3,
                "quantity" => 1,
            ],
            [
                "id" => 21,
                "purchase_data_id" => 10,
                "item_id" => 4,
                "quantity" => 1,
            ],
            [
                "id" => 22,
                "purchase_data_id" => 11,
                "item_id" => 3,
                "quantity" => 1,
            ],
            [
                "id" => 23,
                "purchase_data_id" => 11,
                "item_id" => 4,
                "quantity" => 1,
            ],
            [
                "id" => 24,
                "purchase_data_id" => 11,
                "item_id" => 5,
                "quantity" => 1,
            ],
            [
                "id" => 25,
                "purchase_data_id" => 12,
                "item_id" => 3,
                "quantity" => 3,
            ],
            [
                "id" => 26,
                "purchase_data_id" => 12,
                "item_id" => 4,
                "quantity" => 2,
            ],
            [
                "id" => 27,
                "purchase_data_id" => 13,
                "item_id" => 3,
                "quantity" => 3,
            ],
            [
                "id" => 28,
                "purchase_data_id" => 13,
                "item_id" => 4,
                "quantity" => 2,
            ],
            [
                "id" => 29,
                "purchase_data_id" => 13,
                "item_id" => 5,
                "quantity" => 1,
            ],
            [
                "id" => 30,
                "purchase_data_id" => 14,
                "item_id" => 78,
                "quantity" => 1,
            ],
            //お客様のデータ 田中桃
            [
                "id" => 31,
                "purchase_data_id" => 15,
                "item_id" => 102,
                "quantity" => 1,
            ],
            //お客様のデータ 佐藤絵梨花
            [
                "id" => 32,
                "purchase_data_id" => 16,
                "item_id" => 77,
                "quantity" => 1,
            ],
            [
                "id" => 33,
                "purchase_data_id" => 17,
                "item_id" => 69,
                "quantity" => 1,
            ],
            [
                "id" => 34,
                "purchase_data_id" => 17,
                "item_id" => 70,
                "quantity" => 1,
            ],
            [
                "id" => 35,
                "purchase_data_id" => 17,
                "item_id" => 77,
                "quantity" => 1,
            ],
            //お客様のデータ 栗花落カナヲ
            [
                "id" => 36,
                "purchase_data_id" => 18,
                "item_id" => 111,
                "quantity" => 1,
            ],
            [
                "id" => 37,
                "purchase_data_id" => 18,
                "item_id" => 118,
                "quantity" => 1,
            ],
            [
                "id" => 38,
                "purchase_data_id" => 18,
                "item_id" => 161,
                "quantity" => 1,
            ],
            [
                "id" => 39,
                "purchase_data_id" => 18,
                "item_id" => 31,
                "quantity" => 1,
            ],
        ];

        DB::table('purchased_items')->insert($data);

    }
}
