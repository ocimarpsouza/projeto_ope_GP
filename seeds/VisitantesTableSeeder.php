<?php

use Illuminate\Database\Seeder;

class VisitantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Visitantes::class, 40)->create();
    }
}
