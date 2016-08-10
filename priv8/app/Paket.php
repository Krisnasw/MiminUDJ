<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    //
    protected $table = "quiz";

    public $timestamps = false;

    public function Mapel()
    {
    	$this->belongsTo('App\Mapel');
    }

    public function Soal()
    {
    	$this->belongsTo('App\Soal');
    }
}
