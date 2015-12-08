<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class BusinessLinesTableSeeder extends Seeder
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
        $lines = Yaml::parse(file_get_contents($yaml));

        foreach ($lines as $line) {
            DB::table(self::_getTableName())->insert([
                'name'       => $line,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
