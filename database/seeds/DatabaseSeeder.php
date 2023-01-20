<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
        $this->call(PurchaseDataTableSeeder::class);
        $this->call(PurchasedItemsTableSeeder::class);
    }
}
