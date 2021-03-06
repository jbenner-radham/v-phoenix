<?php

use Illuminate\Database\Seeder;

class EntitiesTableSeeder extends Seeder
{
    use App\Utilities\SeedTableTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entity::class, 50)->create();
    }

}
