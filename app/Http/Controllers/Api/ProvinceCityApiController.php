<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\City;
use App\Models\Area;

class ProvinceCityApiController extends Controller
{
    private $perPage = 20;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return Province::find($id)->city;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $data = [];

        $data['city']       = City::find($request->segment(6));
        $data['zones']      = City::find($request->segment(6))->areas;
        $data['barangays']  = City::find($request->segment(6))->barangays;

        $items  = collect($data);

        return response()->json(new LengthAwarePaginator(
            $items->forPage($request->input('page', 1), $this->perPage), $items->count(), $this->perPage, $request->input('page', 1)
        ));
    }
}
