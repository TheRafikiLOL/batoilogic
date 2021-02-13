<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProviderRequest;
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
}
