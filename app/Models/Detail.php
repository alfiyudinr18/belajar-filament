<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $guarded = [];
    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function faktur(){
        return $this->belongsTo(Faktur::class, 'id');
    }
}
