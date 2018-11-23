<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   protected $table = 'user';
   protected $primaryKey = 'id';

   public $timestamps = true;

   protected $fillable = [
        'name',
        'lastname',
        'document',
        'genre',
        'birthday',
        'copyDocument',
        'copyBirth',
        'copyTitle',
        'copyNotes',
        'copyOpsu',
        'copyBackground'
   ];
}
