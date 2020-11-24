<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable=[
        'user_id','judul','isi'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
