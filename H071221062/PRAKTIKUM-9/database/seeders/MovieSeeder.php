<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("movies")->insert([
            'judul'=> 'The Man From Nowhere',
            'Genre' => 'Action, Thriller, Crime',
            'Negara' => 'Korea Selatan',
            'Sutradara'=> 'Lee Jung Beom',
            'Durasi'=> '119 Menit',
            'Rating'=> '7.7',
        ]);
    }
}
