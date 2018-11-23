<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'document' => '26774668',
            'name' => 'Josue',
    	    'lastname' => 'Marin',
    	    'genre' => 'Masculino',
    	    'birthday' => '1997-10-04',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'Si',
            'copyOpsu' => 'Si',
            'copyBackground' => 'Si'
        ]);

        User::create([
            'document' => '25990089',
            'name' => 'Andrea',
    	    'lastname' => 'Osuna',
    	    'genre' => 'Femenino',
    	    'birthday' => '1996-01-05',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'No',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '6220075',
            'name' => 'Jesus',
    	    'lastname' => 'Marin',
    	    'genre' => 'Masculino',
    	    'birthday' => '1964-02-14',
    	    'copyDocument' => 'No',
    	    'copyBirth' => 'No',
            'copyTitle' => 'No',
            'copyNotes' => 'No',
            'copyOpsu' => 'No',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '6926300',
            'name' => 'Georgina',
    	    'lastname' => 'Ortiz',
    	    'genre' => 'Femenino',
    	    'birthday' => '1996-10-02',
    	    'copyDocument' => 'No',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'No',
            'copyNotes' => 'Si',
            'copyOpsu' => 'No',
            'copyBackground' => 'Si'
        ]);

        User::create([
            'document' => '19255308',
            'name' => 'Sandra',
    	    'lastname' => 'Marin',
    	    'genre' => 'Femenino',
    	    'birthday' => '1991-07-07',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'No',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '202369654',
            'name' => 'Patty',
    	    'lastname' => 'Mendez',
    	    'genre' => 'Femenino',
    	    'birthday' => '1991-12-12',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'No',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '191919',
            'name' => 'Pablo',
    	    'lastname' => 'Escobar',
    	    'genre' => 'Masculino',
    	    'birthday' => '1980-01-07',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'Si',
            'copyOpsu' => 'Si',
            'copyBackground' => 'Si'
        ]);

        User::create([
            'document' => '12598789',
            'name' => 'Claudia',
    	    'lastname' => 'Rico',
    	    'genre' => 'Femenino',
    	    'birthday' => '1995-06-01',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '19255108',
            'name' => 'Sandra',
    	    'lastname' => 'Marin',
    	    'genre' => 'Femenino',
    	    'birthday' => '1991-07-07',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'No',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '5696625',
            'name' => 'David',
    	    'lastname' => 'Marin',
    	    'genre' => 'Masculino',
    	    'birthday' => '1997-01-10',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'No',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'No',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '10258963',
            'name' => 'Jeissica',
    	    'lastname' => 'Suarez',
    	    'genre' => 'Femenino',
    	    'birthday' => '1993-12-11',
    	    'copyDocument' => 'No',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'Si',
            'copyBackground' => 'Si'
        ]);

        User::create([
            'document' => '1020304',
            'name' => 'Elvio',
    	    'lastname' => 'Lao',
    	    'genre' => 'Otros',
    	    'birthday' => '1980-10-05',
    	    'copyDocument' => 'No',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '16369251',
            'name' => 'Pablo',
    	    'lastname' => 'Lucho',
    	    'genre' => 'Masculino',
    	    'birthday' => '1991-07-07',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '16369252',
            'name' => 'Cesar',
    	    'lastname' => 'Trejo',
    	    'genre' => 'Masculino',
    	    'birthday' => '1991-07-07',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'No',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '1169251',
            'name' => 'Poncio',
    	    'lastname' => 'Pilato',
    	    'genre' => 'Masculino',
    	    'birthday' => '1970-01-02',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'No',
            'copyTitle' => 'No',
            'copyNotes' => 'No',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '10589478',
            'name' => 'Lucia',
    	    'lastname' => 'Gil',
    	    'genre' => 'Femenino',
    	    'birthday' => '1970-02-02',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'Si',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '6896589',
            'name' => 'Samantha',
    	    'lastname' => 'Gil',
    	    'genre' => 'Femenino',
    	    'birthday' => '1972-03-02',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'Si',
            'copyTitle' => 'Si',
            'copyNotes' => 'Si',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);

        User::create([
            'document' => '3256896',
            'name' => 'Armando',
    	    'lastname' => 'Casas',
    	    'genre' => 'Masculino',
    	    'birthday' => '1970-02-09',
    	    'copyDocument' => 'Si',
    	    'copyBirth' => 'No',
            'copyTitle' => 'Si',
            'copyNotes' => 'Si',
            'copyOpsu' => 'Si',
            'copyBackground' => 'No'
        ]);
    }
}
