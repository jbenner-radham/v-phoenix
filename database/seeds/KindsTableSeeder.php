<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class KindsTableSeeder extends Seeder
{
    use App\Utilities\SeedTableNameTrait;

    /**
     * Run the database seeds.
     *
     * @see https://html.spec.whatwg.org/#kind-strings
     * @see http://tools.ietf.org/html/rfc6350#section-6.1.4
     * @see https://tools.ietf.org/html/rfc6869
     * @return void
     */
    public function run()
    {
        $kinds = Yaml::parse(file_get_contents(__DIR__ . '/data/kinds.yaml'));

        foreach ($kinds as $kind) {
            DB::table(self::_getTableName())->insert([
                'name' => $kind
            ]);
        }
    }
}
