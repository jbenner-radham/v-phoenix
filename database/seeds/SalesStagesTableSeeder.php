<?php

use Illuminate\Database\Seeder;

class SalesStagesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stages = self::_getSeedData();

        foreach ($stages as $stage) {
            DB::table(self::_getTableName())->insert([
                 'name' => $stage
            ]);
        }
    }
}
