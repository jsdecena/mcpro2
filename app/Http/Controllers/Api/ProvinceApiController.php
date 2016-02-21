<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\City;

class ProvinceApiController extends Controller
{
    private $perPage = 20;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Province::paginate(50);
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

        $data['province']       = Province::find($id);
        $data['cities']         = Province::find($id)->city->count();

        $items  = collect($data);

        return response()->json(new LengthAwarePaginator(
            $items->forPage($request->input('page', 1), $this->perPage), $items->count(), $this->perPage, $request->input('page', 1)
        ));
    }
}
