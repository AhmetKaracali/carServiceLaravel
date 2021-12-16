<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = array('customerID','serviceID','automobileID','totalAmount','status');


    public function customer()
    {
        return $this->belongsTo(customers::class,'customerID','id','customer');
    }

    public function services()
    {
        return $this->belongsTo(services::class,'serviceID','id','service');
    }
}
