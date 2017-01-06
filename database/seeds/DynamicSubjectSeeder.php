<?php

use Illuminate\Database\Seeder;

class DynamicSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DynamicSubject::class, 1)->create();
    }
}
