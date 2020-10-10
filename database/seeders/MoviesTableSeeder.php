<?php

namespace Database\Seeders;

use App\Models\Movie;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $firstMovie = $client->request('GET', "http://www.omdbapi.com/?apikey=a9257456&t=dark_knight");
        $secondMovie = $client->request('GET', 'http://www.omdbapi.com/?apikey=a9257456&t=goodfellas');
        $thirdMovie = $client->request('GET', 'http://www.omdbapi.com/?apikey=a9257456&t=127_hours');
        $fourthMovie = $client->request('GET', 'http://www.omdbapi.com/?apikey=a9257456&t=wolf_of_wall_street');
        
        Movie::create([
            'id'          => 1,
            'title'       => json_decode((string)$firstMovie->getBody())->Title,
            'image'       => json_decode((string)$firstMovie->getBody())->Poster,
            'description' => json_decode((string)$firstMovie->getBody())->Plot,
            'director'    => json_decode((string)$firstMovie->getBody())->Director,
        ]);

        Movie::create([
            'id'          => 2,
            'title'       => json_decode((string)$secondMovie->getBody())->Title,
            'image'       => json_decode((string)$secondMovie->getBody())->Poster,
            'description' => json_decode((string)$secondMovie->getBody())->Plot,
            'director'    => json_decode((string)$secondMovie->getBody())->Director,
        ]);

        Movie::create([
            'id'          => 3,
            'title'       => json_decode((string)$thirdMovie->getBody())->Title,
            'image'       => json_decode((string)$thirdMovie->getBody())->Poster,
            'description' => json_decode((string)$thirdMovie->getBody())->Plot,
            'director'    => json_decode((string)$thirdMovie->getBody())->Director,
        ]);

        Movie::create([
            'id'          => 4,
            'title'       => json_decode((string)$fourthMovie->getBody())->Title,
            'image'       => json_decode((string)$fourthMovie->getBody())->Poster,
            'description' => json_decode((string)$fourthMovie->getBody())->Plot,
            'director'    => json_decode((string)$fourthMovie->getBody())->Director,
        ]);
    }
}
