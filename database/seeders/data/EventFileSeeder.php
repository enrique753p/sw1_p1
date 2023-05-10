<?php

namespace Database\Seeders\data;

use App\Models\EventFile;
use App\Models\PaperFile;
use Illuminate\Database\Seeder;

class EventFileSeeder extends Seeder
{
 

    public function run() 
    {
        EventFile::create([
            'event_id' => 1,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/event/evento1.jpg',
            'urlP' => 'sw1_p1/event/evento1.jpg'
        ]);
        EventFile::create([
            'event_id' => 2,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/event/evento2.jpg',
            'urlP' => 'sw1_p1/event/evento2.jpg'
        ]);
        EventFile::create([
            'event_id' => 3,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/event/evento3.jpg',
            'urlP' => 'sw1_p1/event/evento3.jpg'
        ]);


        
    }
}
