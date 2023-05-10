<?php

namespace Database\Seeders\data;

use App\Models\UserFile;
use Illuminate\Database\Seeder;

class UserFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFile::create([
            'user_id' => 6,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/6/messi_perfil1.jpg',
            'urlP' => 'sw1_p1/userFile/6/messi_perfil1.jpg'
        ]);
        UserFile::create([
            'user_id' => 6,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/6/messi_perfil2.jpg',
            'urlP' => 'sw1_p1/userFile/6/messi_perfil2.jpg'
        ]);
        UserFile::create([
            'user_id' => 6,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/6/messi_perfil3.jpg',
            'urlP' => 'sw1_p1/userFile/6/messi_perfil3.jpg'
        ]);

        UserFile::create([
            'user_id' => 7,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/7/perfilcr7_1.png',
            'urlP' => 'sw1_p1/userFile/7/perfilcr7_1.png'
        ]);
        UserFile::create([
            'user_id' => 7,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/7/perfilcr7_2.jpg',
            'urlP' => 'sw1_p1/userFile/7/perfilcr7_2.jpg'
        ]);
        
        UserFile::create([
            'user_id' => 7,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/7/perfilcr7_3.jpg',
            'urlP' => 'sw1_p1/userFile/7/perfilcr7_3.jpg'
            
        ]);

        UserFile::create([
            'user_id' => 5,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/5/perfil_enrique1.jpg',
            'urlP' => 'sw1_p1/userFile/5/perfil_enrique1.jpg'
            
        ]);
        UserFile::create([
            'user_id' => 5,
            'url' => 'https://examen-software1-s3.s3.amazonaws.com/sw1_p1/userFile/5/perfil_enrique2.jpg',
            'urlP' => 'sw1_p1/userFile/5/perfil_enrique2.jpg'
            
        ]);

    }
}
