<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = [
            [
                'title' => 'Livin_on_a_Prayer',
                'singer' => 'Bon Jovi',
                
            ],

            [

                'title' => 'Nothing_Else_Matters',
                'singer' => 'Metallica',
                
            ],

            [
                'title' => 'Thunderstruck',
                'singer' => 'AC/DC',
                
            ],

            [

                'title' => 'Back_In_Black',
                'singer' => 'AC/DC',
                
            ],

            [

                'title' => 'ace_of_spades',
                'singer' => 'Motörhead',
                
            ]


        ];
        foreach($songs as $song)
        {
            DB::table('songs')->insert([$song]);
        };

       
    }
}
