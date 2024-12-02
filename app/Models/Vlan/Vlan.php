<?php

namespace App\Models\Vlan;

use App\Models\Tejari;
use Illuminate\Database\Eloquent\Model;

class Vlan extends Model
{
    protected $table = "vlans";
    protected $fillable = ['tejari_id', 'vlan', 'port_sw', 'sw', 'status'];

    public function tejari()
    {
        return $this->belongsTo(Tejari::class, 'tejari_id');
    }
}
