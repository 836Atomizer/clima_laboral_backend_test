<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmbassadorPostRequest;
use App\Models\Ambassador;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AmbassadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Ambassador[]|Collection
     */
    public function index()
    {
        return $ambassador = Ambassador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AmbassadorPostRequest $request
     * @return JsonResponse
     */
    public function store(AmbassadorPostRequest $request): JsonResponse
    {
        $ambassador = new Ambassador;
        $ambassador->create($request->all());
        return response()->json(
            [
                'message' => 'Success register ambassador.'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Ambassador $ambassador
     * @return Response
     */
    public function show(Ambassador $ambassador)
    {
        return $ambassador::whereId($ambassador->id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AmbassadorPostRequest $request
     * @param Ambassador $ambassador
     * @return JsonResponse
     */
    public function update(Request $request, Ambassador $ambassador): JsonResponse
    {
        $ambassador->update($request->all());
        return response()->json(
            [
                'message' => 'Update ambassador successfully.'
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ambassador $ambassador
     * @return void
     */
    public function destroy(Ambassador $ambassador)
    {
        $ambassador->delete();
    }
}
