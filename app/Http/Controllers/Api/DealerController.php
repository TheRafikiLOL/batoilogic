<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dealers;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers = Dealers::get();
        return $dealers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dealers  $dealers
     * @return \Illuminate\Http\Response
     */
    public function show(Dealers $dealers)
    {
        return $dealers;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dealers  $dealers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dealers $dealers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dealers  $dealers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dealers $dealers)
    {
        //
    }
}
