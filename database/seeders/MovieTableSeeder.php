<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Batman',
                'slug' => 'the-batman',
                'category' => 'Drama Action',
                'video_url' => 'https://www.youtube.com/watch?v=frh95XBeV_o',
                'thumbnail' =>
                    'https://cdn.pixabay.com/photo/2021/05/22/04/27/batman-6272544_960_720.jpg',
                'rating' => 4.9,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Mysterious Of The Executioner',
                'slug' => 'the-mysterious-of-the-executioner',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=86WtBbIQ2OI',
                'thumbnail' => 'https://i.mydramalist.com/06z07_4f.jpg',
                'rating' => 4.8,
                'is_featured' => 0,
            ],
            [
                'name' => 'Pengabdi Setan',
                'slug' => 'pengabdi-setan',
                'category' => 'Horror',
                'video_url' => 'https://www.youtube.com/watch?v=tFgpbi-zJqE',
                'thumbnail' =>
                    'https://statics.indozone.news/content/2020/01/03/DNsEpk/t_5e0eab9eebfe8_700.jpg',
                'rating' => 4.5,
                'is_featured' => 0,
            ],
        ];
        Movie::insert($movies);
    }
}
