<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automobiles extends Model
{
    use HasFactory;
    protected $fillable = array('id','url','brand','model', 'year','option','engine_cylinders','engine_displacement'
    ,'engine_power','engine_torque','engine_fuel_system','engine_fuel','engine_c2o','performance_top_speed'
    ,'performance_acceleration','fuel_economy_city','fuel_economy_highway','fuel_economy_combined','transmission_drive_type'
    ,'transmission_gearbox','brakes_front','brakes_rear','tires_size','dimensions_length','dimensions_width','dimensions_width',
        'dimensions_height','dimensions_front_rear_track','dimensions_wheelbase','dimensions_ground_clearance','dimensions_cargo_volume',
        'dimensions_cd','weight_unladen','weight_limit');
    protected $table = 'automobiles';
    public $timestamps = false;
}
