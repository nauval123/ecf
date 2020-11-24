<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPakan extends Model
{
//    protected $table = 'datapakan';
    public function users(){
        return $this->belongsTo(User::class);
    }
}
