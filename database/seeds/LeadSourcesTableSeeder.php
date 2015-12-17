<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LeadSourcesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sources = self::_getSeedData();

        foreach ($sources as $source) {
            DB::table(self::_getTableName())->insert([
                'name'       => $source,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
