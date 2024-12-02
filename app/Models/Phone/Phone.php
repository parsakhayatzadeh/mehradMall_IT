<?php

namespace App\Models\Phone;

use App\Models\Tejari;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = "phones";
    protected $fillable = ['tejari_id' , 'phone' , 'ip' , 'user' , 'password' , 'status'];

    public function tejari (){ 
        return $this->belongsTo(Tejari::class);
    }
}
