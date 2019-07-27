<?php

use Illuminate\Database\Seeder;

class PrestatairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\Models\Prestataire::class, 100)->create();
    }
}
