<?php

use Illuminate\Database\Seeder;

class AgrementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\Models\Agrement::class, 100)->create();
    }
}
