<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([
            'title' => 'Nasi Goreng',
            'description' => 'Nasi goreng yang enak dan mudah dibuat.',
            'image' => 'path/to/nasi-goreng.jpg',
        ]);

        // Tambahkan data lainnya
    }
}
