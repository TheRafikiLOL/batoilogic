<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderLines;

class OrderLinesController extends Controller
{
    public function index()
    {
        $orders = OrderLines::whereIn('orderId', $id)->get();
        dd($id);
        return view('orderlines.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = OrderLines::where('orderId','=' ,$id)->get();
        return view('orderlines.index', compact('orders'));
        /*$order = OrderLines::findOrFail($id);
        return view('order.show', compact('order'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = OrderLines::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = OrderLines::findOrFail($id);
        $order->dealerId = $request->dealer;
        $order->state = $request->state;
        $order->address =$request->address;
        $order->save();
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
