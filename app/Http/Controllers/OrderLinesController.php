<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\OrderLines;

class OrderLinesController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('orderlines.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $order = new OrderLines();
        $order->orderId = $id;
        $order->productId = $request->get('prod');
        $product=Product::findOrFail($request->get('prod'));
        $order->quantity = $request->get('quantity');
        $order->price = $product->price;
        $order->discount =  $request->get('discount');

        $order->save();
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $total=0;
        $orders = OrderLines::where('orderId','=' ,$id)->get();
        return view('orderlines.index', compact('orders','total'));
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
        return view('orderlines.edit', compact('order'));
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
        $order->productId = $request->producto;
        $order->quantity = $request->cantidad;
        $order->discount =$request->descuento;
        $order->save();
        return redirect()->route('orderlines.show', $order->orderId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=OrderLines::findOrFail($id);
        $order->delete();
        return redirect()->route('orderlines.show',$order->orderId);
    }
}
