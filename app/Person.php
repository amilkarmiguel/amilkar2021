<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Person extends Model
{
    protected $fillable = [
        'name',
        'app',
        'apm',
        'ci',
        'phone',
        'address',
        'user_id'];

    public function user(){
        return $this->hasOne('App\User');
    }

}
