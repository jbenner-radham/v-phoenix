<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class LeadSourcesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableNameTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yaml = __DIR__ . '/data/' . self::_getTableName() . '.yaml';
        $sources = Yaml::parse(file_get_contents($yaml));

        foreach ($sources as $source) {
            DB::table(self::_getTableName())->insert([
                'name'       => $source,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
