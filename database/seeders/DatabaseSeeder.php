<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Schema::disableForeignKeyConstraints();
        //Schema::enableForeignKeyConstraints();

        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ZipcodesTableSeeder::class);        
        $this->call(RolesTableSeeder::class);
        
        $this->call(UsersTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
