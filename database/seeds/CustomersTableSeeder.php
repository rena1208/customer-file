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
                "birthday" => $faker->dateTimeBetween('-80 years', '-20years')
                                    ->format('Y-m-d'), // 生年月日 (20〜80年前の日付)
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '北海道札幌市',
            ],
            [
                "id" => 2,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '進藤ひかる',
                "name_ruby" => 'しんどうひかる',
                "birthday" => $faker->dateTimeBetween('-80 years', '-20years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '埼玉県所沢市上山口２１３５',
            ],
            [
                "id" => 3,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '後藤里恵',
                "name_ruby" => 'ごとうりえ',
                "birthday" => $faker->dateTimeBetween('-80 years', '-20years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '千葉県千葉市美浜区美浜１',
            ],
            [
                "id" => 4,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '安藤桜',
                "name_ruby" => 'あんどうさくら',
                "birthday" => $faker->dateTimeBetween('-80 years', '-20years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '宮城県仙台市宮城野区宮城野２丁目１１−６',
            ],
            [
                "id" => 5,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '田中桃',
                "name_ruby" => 'たなかもも',
                "birthday" => $faker->dateTimeBetween('-80 years', '-20years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '神奈川県横浜市中区横浜公園',
            ],
            [
                "id" => 6,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '佐藤絵梨花',
                "name_ruby" => 'さとうえりか',
                "birthday" => $faker->dateTimeBetween('-80 years', '-20years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '福岡県福岡市中央区地行浜２丁目２−２',
            ],
            [
                "id" => 7,
                "user_id" => 1,
                "gender_id" => 1,
                "name" => '竈門炭治郎',
                "name_ruby" => 'かまどたんじろう',
                "birthday" => $faker->dateTimeBetween('-80 years', '-20years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '北海道札幌市豊平区羊ケ丘１',
            ],
            [
                "id" => 8,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '竈門禰󠄀豆子',
                "name_ruby" => 'かまどねずこ',
                "birthday" => $faker->dateTimeBetween('-20 years', '-18years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '北海道札幌市豊平区羊ケ丘１',
            ],
            [
                "id" => 9,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '栗花落カナヲ',
                "name_ruby" => 'つゆりかなを',
                "birthday" => $faker->dateTimeBetween('-20 years', '-18years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '大阪府大阪市此花区北港緑地２丁目２−６５',
            ],
            [
                "id" =>  10,
                "user_id" => 1,
                "gender_id" => 2,
                "name" => '胡蝶しのぶ',
                "name_ruby" => 'こちょうしのぶ',
                "birthday" => $faker->dateTimeBetween('-24 years', '-20years')
                                    ->format('Y-m-d'), 
                "phone_number" => $faker->unique()->phoneNumber,
                "address" => '大阪府大阪市此花区北港緑地２丁目２−６５',
            ],
        ];

         DB::table('manufacturers')->insert($data);
    }
}
