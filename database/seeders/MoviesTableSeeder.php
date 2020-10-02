<?php

namespace Database\Seeders;

use App\Models\Movie;
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
        Movie::create([
            'id'          => 1,
            'title'       => "Schindler's List",
            'image'       =>  "./schindlerslist.jpg",
            'description' => "In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.",
            'director'    => "Steven Spielberg",
        ]);

        Movie::create([
            'id'          => 2,
            'title'       => "Birdman",
            'image'       =>  "./birdman.jpg",
            'description' => "A washed-up superhero actor attempts to revive his fading career by writing, directing, and starring in a Broadway production.",
            'director'    => "Alejandro G. Iñárritu",
        ]);

        Movie::create([
            'id'          => 3,
            'title'       => "Interstellar",
            'image'       =>  "./interstellar.jpg",
            'description' => "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.",
            'director'    => "Christopher Nolan",
        ]);
        
        Movie::create([
            'id'          => 4,
            'title'       => "Titanic",
            'image'       =>  "./titanic.jpg",
            'description' => "A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.",
            'director'    => "James Cameron",
        ]);
    }
}
