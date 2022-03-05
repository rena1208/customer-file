<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //お客様のデータ
        $data = [
            [
                "id" => 1,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '神田かずみ',
                "name_ruby" => 'かんだかずみ',
                // "birthday" => 2000-1-4,
                // $faker->dateTimeBetween('-80 years', '-20years')
                //                     ->format('Y-m-d'), 生年月日 (20〜80年前の日付)
                "phone_number" => 0100-01-0400,
                // $faker->unique()->phoneNumber,
                "address" => '北海道札幌市',
                "repeater" => 0,
            ],
            [
                "id" => 2,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '進藤ひかる',
                "name_ruby" => 'しんどうひかる',
                // "birthday" => 1994-12-31,
                "phone_number" => 0010-12-3100,
                "address" => '埼玉県所沢市上山口２１３５',
                "repeater" => 0,
            ],
            [
                "id" => 3,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '後藤里恵',
                "name_ruby" => 'ごとうりえ',
                // "birthday" => 1850-7-29, 
                "phone_number" => 0010-07-2900,
                "address" => '千葉県千葉市美浜区美浜１',
                "repeater" => 0,
            ],
            [
                "id" => 4,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '安藤桜',
                "name_ruby" => 'あんどうさくら',
                // "birthday" => 1999-6-10, 
                "phone_number" => 0010-06-1000,
                "address" => '宮城県仙台市宮城野区宮城野２丁目１１−６',
                "repeater" => 0,
            ],
            [
                "id" => 5,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '田中桃',
                "name_ruby" => 'たなかもも',
                // "birthday" => 1993-5-5, 
                "phone_number" => 0010-05-0500,
                "address" => '神奈川県横浜市中区横浜公園',
                "repeater" => 0
            ],
            [
                "id" => 6,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '佐藤絵梨花',
                "name_ruby" => 'さとうえりか',
                // "birthday" => 1960-10-28, 
                "phone_number" => 0010-10-2800,
                "address" => '福岡県福岡市中央区地行浜２丁目２−２',
                "repeater" => 0
            ],
            [
                "id" => 7,
                "user_id" => 1,
                "gender_id" => 1,
                "name" => '竈門炭治郎',
                "name_ruby" => 'かまどたんじろう',
                // "birthday" => 1977-11-25, 
                "phone_number" => 0100-11-2500,
                "address" => '北海道札幌市豊平区羊ケ丘１',
                "repeater" => 0
            ],
            [
                "id" => 8,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '竈門禰󠄀豆子',
                "name_ruby" => 'かまどねずこ',
                // "birthday" => 2003-12-20, 
                "phone_number" => 0100-12-2000,
                "address" => '北海道札幌市豊平区羊ケ丘１',
                "repeater" => 0
            ],
            [
                "id" => 9,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '栗花落カナヲ',
                "name_ruby" => 'つゆりかなを',
                // "birthday" => 1992-2-3,
                "phone_number" => 0100-90-2200,
                "address" => '大阪府大阪市此花区北港緑地２丁目２−６５',
                "repeater" => 0
            ],
            [
                "id" =>  10,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '胡蝶しのぶ',
                "name_ruby" => 'こちょうしのぶ',
                // "birthday" => 2001-7-14, 
                "phone_number" => 0100-07-0014,
                "address" => '大阪府大阪市此花区北港緑地２丁目２−６５',
                "repeater" => 0
            ],
        ];

        DB::table('customers')->insert($data);
    }
}
