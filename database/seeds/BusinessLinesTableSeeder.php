<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class BusinessLinesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lines = self::_getSeedData();

        foreach ($lines as $line) {
            DB::table(self::_getTableName())->insert([
                'name'       => $line,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
