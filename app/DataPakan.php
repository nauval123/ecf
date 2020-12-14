<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPakan extends Model
{
    protected $table = 'datapakan';
    protected $fillable=[
        'user_id','nama','umurAyam','bobot','detail','status','keterangan'
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
