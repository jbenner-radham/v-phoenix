<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(KindsTableSeeder::class);
        $this->call(VcardsTableSeeder::class);
        $this->call(LeadSourcesTableSeeder::class);
        $this->call(LeadStatusesTableSeeder::class);

        Model::reguard();
    }
}
