<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Narrativo',
            'type' => 'Literario',
            'description' => 'Género narrativo, incluye cuentos y novelas',
        ]);

        Genre::create([
            'name' => 'Dramático',
            'type' => 'Teatral',
            'description' => 'Género dramático, incluye obras de teatro y tragedias',
        ]);

        Genre::create([
            'name' => 'Didáctico',
            'type' => 'Educativo',
            'description' => 'Género didáctico, con fines educativos y morales',
        ]);
    }
}
