<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bandstable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $band =[
            [
                'name' => 'Motörhead',
                'founded' => '1986',
                'genre' => 'rock',
                'active_til' => "1975 - 2015"

            ],
        ];

        
       
            DB::table('bands')->insert($band);

            $band =[

                [
                    'name' => 'AC/DC',
                    'founded' => '1992',
                    'genre' => 'Hardrock',
                  
                ],
                [
                    'name' => 'Metallica' ,
                    'founded' => '1980',
                    'genre' => 'metal',
                ],
    
            ];
    
            
           
                DB::table('bands')->insert($band);
            
        
    }
}
