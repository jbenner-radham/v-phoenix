<?php

use Illuminate\Database\Seeder;
use Stringy\Stringy;
use Symfony\Component\Yaml\Yaml;

class VcardsTableSeeder extends Seeder
{
    use App\Utilities\SeedTableNameTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vcards = Yaml::parse(file_get_contents(__DIR__ . '/data/vcards.yaml'));

        foreach ($vcards as $vcard) {
            $properties = [];

            foreach ($vcard as $property => $value) {
                $properties[$property] = $value;
            }

            DB::table(self::_getTableName())->insert($properties);
        }
    }
}
