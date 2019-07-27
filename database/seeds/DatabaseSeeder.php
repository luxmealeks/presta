<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(TypesTableSeeder::class);
        $this->call(PrestatairesTableSeeder::class);
        $this->call(ActivitesTableSeeder::class);
        $this->call(AgrementsTableSeeder::class);
    }
}
