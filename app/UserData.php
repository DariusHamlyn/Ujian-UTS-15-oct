<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $fillable = ['nama', 'telepn', 'email', 'alamat'];
}
