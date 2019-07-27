<?php

use Illuminate\Database\Seeder;

class ActivitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\Models\Activite::class, 30)->create();
    }
}
