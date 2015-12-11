<?php

use Illuminate\Database\Seeder;

class EntitiesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableNameTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entity::class, 'individual', 50)->create();
    }

}
