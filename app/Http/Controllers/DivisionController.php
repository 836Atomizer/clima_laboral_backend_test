<?php

namespace App\Http\Controllers;

use App\Http\Requests\DivisionPostRequest;
use App\Models\Division;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Division[]|Collection
     */
    public function index()
    {
        return $division = Division::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DivisionPostRequest  $request
     * @return JsonResponse
     */
    public function store(DivisionPostRequest $request): JsonResponse
    {
        $division = new Division;
        $division->create($request->all());
        return response()->json(
            [
                'message' => 'Success register Division.'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Division $division
     * @return Response
     */
    public function show(Division $division)
    {
        return $division::with('ambassador')->whereId($division->id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DivisionPostRequest  $request
     * @param Division $division
     * @return JsonResponse
     */
    public function update(Request $request, Division $division): JsonResponse
    {
        $division->update($request->all());
        return response()->json(
            [
                'message' => 'Success register division.'
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Division $division
     * @return Response
     */
    public function destroy(Division $division)
    {
        $division->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Division $division
     * @return Response
     */
    public function divisionChild(Division $division){
        return $division::where('division_id',$division->id)->get();
    }
}
