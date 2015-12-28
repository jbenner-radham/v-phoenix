<?php

use Illuminate\Database\Seeder;

class ContactTypesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = self::_getSeedData();

        foreach ($types as $type) {
            DB::table(self::_getTableName())->insert([
                'name'       => $type,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
