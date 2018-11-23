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
    }
}
