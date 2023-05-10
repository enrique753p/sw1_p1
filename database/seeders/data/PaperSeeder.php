<?php

namespace Database\Seeders\data;

use App\Models\Paper;
use App\Models\PaperFile;
use Illuminate\Database\Seeder;

class PaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paper::create([   //FOTOGRAGO 1
          'user_id' => '4',
          'event_id' => '2',
          'tipo' => 'F',
        ]); 
        Paper::create([
          'user_id' => '4', // FOTOGRAFO 1
          'event_id' => '3',
          'tipo' => 'F',
        ]);
        Paper::create([
          'user_id' => '4', // FOTOGRAFO 1 
          'event_id' => '1',
          'tipo' => 'F',
        ]);        
        Paper::create([
          'user_id' => '5', //FOTOGRAFO 2
          'event_id' => '1',
          'tipo' => 'F',
        ]);
        Paper::create([
          'user_id' => '5', // FOTOGRAFO 2
          'event_id' => '2',
          'tipo' => 'F',
        ]);
        // Paper::create([
        //   'user_id' => '5',
        //   'event_id' => '3',
        //   'tipo' => 'F',
        // ]);
        Paper::create([
          'user_id' => '6',
          'event_id' => '1',
          'tipo' => 'I',
        ]);
        Paper::create([
          'user_id' => '7',
          'event_id' => '1',
          'tipo' => 'I',
        ]);

        Paper::create([
          'user_id' => '7',
          'event_id' => '2',
          'tipo' => 'I',
        ]);

        Paper::create([
          'user_id' => '7',
          'event_id' => '3',
          'tipo' => 'I',
        ]);
        
        Paper::create([
          'user_id' => '8',
          'event_id' => '1',
          'tipo' => 'I',
        ]);

        Paper::create([
          'user_id' => '8',
          'event_id' => '2',
          'tipo' => 'I',
        ]);

        Paper::create([
          'user_id' => '8',
          'event_id' => '3',
          'tipo' => 'I',
        ]);
        // PaperFile::create([
        //     'url' => 'url',
        //     'urlP' => 'urlP',
        //     'paper_id' => '1'
        //   ]);
    }
}
