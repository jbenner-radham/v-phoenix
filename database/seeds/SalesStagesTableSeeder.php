<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class SalesStagesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableNameTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stages = Yaml::parse(file_get_contents(__DIR__ . '/data/sales_stages.yaml'));

        foreach ($stages as $stage) {
            DB::table(self::_getTableName())->insert([
                 'name' => $stage
            ]);
        }
    }
}
