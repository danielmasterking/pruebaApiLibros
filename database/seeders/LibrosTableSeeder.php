<?php

namespace Database\Seeders;
use App\Models\Libros;


use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libros::factory()->count(20)->create();
    }
}
