<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            [
                "id" => 1,
                "login_id" => '001234',
                "password" => 'sp001234',
                "name" => '札幌店',
            ]
        ];

         DB::table('users')->insert($data);
    }
}
