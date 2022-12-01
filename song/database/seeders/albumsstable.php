<?php

namespace Database\Seeders;

use App\Models\album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class albumsstable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $album =[
            [
                'name' => 'Slippery When Wet',
                'year' => '1986',
                'times_sold' => '200000'
             
            ],
            [
                'name' =>  'Black Album',
                'year' => '1992',
                'times_sold' => '500000'
             
            ],
            [
                'name' => 'The Razors Edge',
                'year' =>'1990',
                'times_sold' =>'87529060'
             
            ],
            [
                'name' => 'Studio album',
                'year' => '1980',
                'times_sold' => '34957893'
             
            ],
            [
                'name' => 'Ace of Spades',
                'year' =>'1980',
                'times_sold' => '247935908'
             
            ],
        ];

    
        
        DB::table('albums')->insert($album);
    
        
    }
}
