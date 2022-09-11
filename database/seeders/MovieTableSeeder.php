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
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=frh95XBeV_o',
                'thumbnail' => 'https://picsum.photos/id/1/300/300',
                'rating' => 9.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The GodFather',
                'slug' => 'the-godfather',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=_7H5iIAXk9A',
                'thumbnail' => 'https://picsum.photos/id/1/300/300',
                'rating' => 9.5,
                'is_featured' => 0,
            ],
            [
                'name' => 'The GodFather: Part II',
                'slug' => 'the-godfather-part-ii',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=_7H5iIAXk9A',
                'thumbnail' => 'https://picsum.photos/id/1/300/300',
                'rating' => 9.5,
                'is_featured' => 0,
            ],
        ];
        Movie::insert($movies);
    }
}
