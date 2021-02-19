<?php

namespace App\Http\Controllers;

use App\Models\OrderLines;
use Illuminate\Http\Request;
use App\Models\Orders;
use Barryvdh\DomPDF\PDF;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Orders::paginate(15);
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Orders();
        $order->customerId = $request->get('customer');
        $order->dealerId = $request->get('dealer');
        $order->state =  $request->get('state');
        $order->address =  $request->get('address');

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
        $order = Orders::findOrFail($id);
        return view('order.show', compact('order'));
    }

    public function pdf($id)
    {
        $order = Orders::findOrFail($id);
        $pdf = PDF::loadView('order.pdf',compact('order'));
        return $pdf->download($order->id . '.pdf');
        //return view('order.pdf', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Orders::findOrFail($id);
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
        $order = Orders::findOrFail($id);
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
        OrderLines::where('orderId', $id)->delete();
        Orders::findOrFail($id)->delete();
        return redirect()->route('order.index');
    }
}
