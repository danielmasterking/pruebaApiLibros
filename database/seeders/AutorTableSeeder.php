<?php

namespace Database\Seeders;
use App\Models\Autor;
use Illuminate\Database\Seeder;

class AutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::factory()->count(20)->create();
    }
}
