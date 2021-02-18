<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProviderRequest;
use App\Models\OrderLines;
use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::paginate(15);
        return view('provider.index', compact('providers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provider = Provider::findOrFail($id);
        return view('provider.show', compact('provider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = new Provider();
        $provider->name = $request->get('name');

        $provider->save();
        $providers = Provider::paginate(15);
        return view('provider.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        return view('provider.edit', compact('id', 'provider'));
    }

    public function update(ProviderRequest $request, $id)
    {
        $provider = Provider::findOrFail($id);
        $provider->name = $request->name;
        $provider->save();
        return view('provider.show', compact('provider'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::where('providerId','=' , $id)->get();

        foreach ($products as $product) {
            OrderLines::where('productId', '=', $product->id)->delete();
            Product::findOrFail($product->id)->delete();
        }

        Product::where('providerId', $id)->delete();
        Provider::findOrFail($id)->delete();
        $providers = Provider::paginate(15);
        return view('provider.index', compact('providers'));
    }
}
