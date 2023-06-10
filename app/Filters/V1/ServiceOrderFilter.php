<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class ServiceOrderFilter extends ApiFilter {

    protected $safeParams = [
        "vehiclePlate" => ["eq"]
    ];

    protected $columnMap = [
        "vehiclePlate" => "vehiclePlate",
        "vehicle_plate" => "vehiclePlate"
    ];

    protected $operatorMap = [
        "eq" => "="
    ];

}