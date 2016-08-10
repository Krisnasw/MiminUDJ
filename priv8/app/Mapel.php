<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //
    protected $table = "mapel";

    public $timestamps = false;

    public function Soal()
    {
    	$this->belongsTo('App\Soal');
    }

    public function Paket()
    {
    	$this->belongsTo('App\Paket');
    }
}
