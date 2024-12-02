<?php

namespace App\Models\IpStatic;

use App\Models\Tejari;
use Illuminate\Database\Eloquent\Model;

class IpStatic extends Model
{
    protected $table = 'ip_statics';
    protected $fillable = ['tejari_id', 'vlan', 'ip', 'status'];


    public function tejari()
    {
        return  $this->belongsTo(Tejari::class);
    }
}
