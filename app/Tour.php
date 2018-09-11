<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $fillable = ['title','content','photo_id','type'];


    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
