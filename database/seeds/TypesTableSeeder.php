<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $type1 = App\Models\Type::firstOrCreate(['name' => 'Services'], ['uuid' => Str::uuid()]);
        $type2 = App\Models\Type::firstOrCreate(['name' => 'Travaux'], ['uuid' => Str::uuid()]);
        $type3 = App\Models\Type::firstOrCreate(['name' => 'Cabinets'], ['uuid' => Str::uuid()]);
        $type4 = App\Models\Type::firstOrCreate(['name' => 'Consultants Individuels'], ['uuid' => Str::uuid()]);
        $type5 = App\Models\Type::firstOrCreate(['name' => 'Fournitures'], ['uuid' => Str::uuid()]);
    }
}
