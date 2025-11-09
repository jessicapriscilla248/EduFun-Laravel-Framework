<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//hrus import dulu jgn lupa
use App\Models\Article;
use App\Models\Writer;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        $writers = Writer::all();

        // 3 Data Science 
        for($i=1; $i<=3; $i++){
            Article::create([
                'course_id' => 1, 
                'writer_id' => $writers->random()->id,
                'judul' => $faker->sentence(1),
                'rangkuman' => $faker->paragraph(1),
                'konten' => $faker->paragraph(2)
            ]);
        }

        // 3 Network Security
        for($i=1; $i<=3; $i++){
            Article::create([
                'course_id' => 2,  
                'writer_id' => $writers->random()->id,
                'judul' => $faker->sentence(1),
                'rangkuman' => $faker->paragraph(1),
                'konten' => $faker->paragraph(2)
            ]);
        }
    }
}
