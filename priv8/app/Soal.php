<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    //
    protected $table = "quiz_questions";

    public $timestamps = false;

    public function Mapel()
    {
    	$this->belongsTo('App\Mapel');
    }

    public function Paket()
    {
    	$this->belongsTo('App\Paket');
    }
}
