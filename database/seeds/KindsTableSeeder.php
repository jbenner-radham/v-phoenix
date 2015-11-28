<?php

use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
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
        $kinds = ['individual', 'group', 'org', 'location', 'device'];

        foreach ($kinds as $kind) {
            DB::table('kinds')->insert([
                'name' => $kind
            ]);
        }
    }
}
