<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OrderLines;
use Illuminate\Http\Request;

class OrderLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderlines = OrderLines::get();
        return $orderlines;
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
     * @param  \App\Models\OrderLines  $orderLines
     * @return \Illuminate\Http\Response
     */
    public function show(OrderLines $orderLines)
    {
        return $orderLines;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderLines  $orderLines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderLines $orderLines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderLines  $orderLines
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderLines $orderLines)
    {
        //
    }
}
