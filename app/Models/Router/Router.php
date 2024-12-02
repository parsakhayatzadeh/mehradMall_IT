<?php

namespace App\Models\Router;

use App\Models\Tejari;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Router extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'routers';
    protected $fillable = ['tejari_id', 'ip_router', 'user', 'password', 'internet_speed', 'status'];

    public function tejari()
    {
        return $this->belongsTo(Tejari::class);
    }
}
