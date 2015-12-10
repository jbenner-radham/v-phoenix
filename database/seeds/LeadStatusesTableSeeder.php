<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class LeadStatusesTableSeeder extends Seeder
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
        $statuses = Yaml::parse(file_get_contents($yaml));

        foreach ($statuses as $status) {
            DB::table(self::_getTableName())->insert([
                'name'       => $status,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
