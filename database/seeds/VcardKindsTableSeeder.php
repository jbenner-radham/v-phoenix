<?php

use Illuminate\Database\Seeder;

class VcardKindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see http://tools.ietf.org/html/rfc6350#section-6.1.4
     * @return void
     */
    public function run()
    {
        $kinds = ['individual', 'group', 'org', 'location'];

        foreach ($kinds as $kind) {
            DB::table('vcard_kinds')->insert([
                'name' => $kind
            ]);
        }
    }
}
