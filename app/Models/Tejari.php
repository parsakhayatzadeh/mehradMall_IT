<?php

namespace App\Models;

use App\Models\IpStatic\IpStatic;
use App\Models\Phone\Phone;
use App\Models\Router\Router;
use App\Models\Vlan\Vlan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tejari extends Model
{
    use HasFactory, SoftDeletes;


    protected $casts = ['image' => 'array'];

    protected $table = 'tejaris';

    protected $fillable = ['name', 'unit', "floor", 'image', 'status'];
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
    public function vlan()
    {

        return $this->hasOne(Vlan::class);
    }
    public function routerr()
    {
        return $this->hasOne(Router::class);
    }
    public function static (){ 
        return $this->hasOne(IpStatic::class);
    }
}
