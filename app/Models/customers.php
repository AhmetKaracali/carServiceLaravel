<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class customers extends Authenticatable
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = array('name','email','password','balance');


    public function orders()
    {
        return $this->hasMany(orders::class,'id','customerID');
    }

}
