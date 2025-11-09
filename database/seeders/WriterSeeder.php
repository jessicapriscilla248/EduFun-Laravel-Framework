<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//hrus import dulu jgn lupa
use App\Models\Writer;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        //looping buat tampilin 3 writer
        for($i=1; $i<=3; $i++){
            Writer::create([
                'profilpicture' => $faker->imageUrl(200, 200, 'people', true), //buat foto image orgnya (tp ternyata gabisa)
                'nama' => $faker->name,
                'spesialis' => $faker->randomElement(['Data Science', 'Network Security']) //bikin random antara DS n NS
            ]);
        }
        
    }
}
