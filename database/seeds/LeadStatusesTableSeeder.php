<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LeadStatusesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = self::_getSeedData();

        foreach ($statuses as $status) {
            DB::table(self::_getTableName())->insert([
                'name'       => $status,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
