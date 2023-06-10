<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ServiceOrderFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceOrderRequest;
use App\Http\Requests\UpdateServiceOrderRequest;
use App\Http\Resources\V1\ServiceOrderCollection;
use App\Http\Resources\V1\ServiceOrderResource;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ServiceOrderFilter();
        $queryItems = $filter->transform($request); // ["column", "operator", "value"]

        if (count($queryItems) > 0) {
            return new ServiceOrderCollection(ServiceOrder::where($queryItems)
                ->paginate(5)->appends($request->query()));
        }

        return new ServiceOrderCollection(ServiceOrder::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceOrderRequest $request)
    {
        $data = $request->validated();
        return new ServiceOrderResource(ServiceOrder::create($data));
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceOrder $serviceOrder)
    {
        return new ServiceOrderResource($serviceOrder);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceOrder $serviceOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceOrderRequest $request, ServiceOrder $serviceOrder)
    {
        $data = $request->validated();
        $serviceOrder->update($data);
        return new ServiceOrderResource($serviceOrder);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceOrder $serviceOrder)
    {
        //
    }
}
