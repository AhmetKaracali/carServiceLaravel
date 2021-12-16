<?php

namespace App\Http\Controllers\v1;

use App\Http\Requests\StoreautomobilesRequest;
use App\Http\Requests\UpdateautomobilesRequest;
use App\Models\automobiles;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class AutomobilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $autos = automobiles::all()->toJson();

        return response()->json([
            'success' => true,
            'message' => 'Success.',
            'data' => $autos
        ], Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateList()
    {
        $autoData = $response = Http::acceptJson()->get('https://static.novassets.com/automobile.json');
        $decoded = json_decode($autoData);
        //dd($decoded);

        $automobileCount = automobiles::all()->count();


        if ($automobileCount != count($decoded->RECORDS))
        {
            $counter = 0;
            foreach ($decoded->RECORDS as $car)
            {
                if ($counter < $automobileCount)
                {
                    continue;
                }
                else
                {
                    $newcar = new automobiles();
                    $newcar->id = $car->id ;
                    $newcar->url = $car->url ;
                    $newcar->brand = $car->brand ;
                    $newcar->model = $car->model ;
                    $newcar->year = $car->year ;
                    $newcar->option = $car->option ;
                    $newcar->engine_cylinders = $car->engine_cylinders ;
                    $newcar->engine_displacement = $car->engine_displacement ;
                    $newcar->engine_power = $car->engine_power ;
                    $newcar->engine_torque = $car->engine_torque ;
                    $newcar->engine_fuel_system = $car->engine_fuel_system ;
                    $newcar->engine_fuel = $car->engine_fuel ;
                    $newcar->engine_c2o = $car->engine_c2o ;
                    $newcar->performance_top_speed = $car->performance_top_speed ;
                    $newcar->performance_acceleration = $car->performance_acceleration ;
                    $newcar->fuel_economy_city = $car->fuel_economy_city ;
                    $newcar->fuel_economy_highway = $car->fuel_economy_highway ;
                    $newcar->fuel_economy_combined = $car->fuel_economy_combined ;
                    $newcar->transmission_drive_type = $car->transmission_drive_type ;
                    $newcar->transmission_gearbox = $car->transmission_gearbox ;
                    $newcar->brakes_front = $car->brakes_front ;
                    $newcar->brakes_rear = $car->brakes_rear ;
                    $newcar->tires_size = $car->tires_size ;
                    $newcar->dimensions_length = $car->dimensions_length ;
                    $newcar->dimensions_width = $car->dimensions_width ;
                    $newcar->dimensions_width = $car->dimensions_width ;
                    $newcar->dimensions_height = $car->dimensions_height ;
                    $newcar->dimensions_front_rear_track = $car->dimensions_front_rear_track ;
                    $newcar->dimensions_wheelbase = $car->dimensions_wheelbase ;
                    $newcar->dimensions_ground_clearance = $car->dimensions_ground_clearance ;
                    $newcar->dimensions_cargo_volume = $car->dimensions_cargo_volume ;
                    $newcar->dimensions_cd = $car->dimensions_cd ;
                    $newcar->weight_unladen = $car->weight_unladen ;
                    $newcar->weight_limit = $car->weight_limit ;
                    $newcar->save();
                }
            }
        }

    }

}
