<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Customers;
use App\Models\OrderLines;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('user.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('id', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        if ($request->get('password1')===$request->get('password2')) {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->address = $request->address;
            $user->email = $request->email;
            $user->password =  bcrypt($request->password1);
            $user->save();
            return view('user.show', compact('user'));
        }
        else {
            $user = User::findOrFail($id);
            $error = 'Las contraseñas no coinciden';
            return view('user.edit', compact('error', 'user'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customers::where('userId','=' , $id)->get();
        $orders = Orders::where('customerId', '=', $customer[0]->id)->get();

        foreach ($orders as $order) {
            OrderLines::where('orderId', '=', $order->id)->delete();
            Orders::findOrFail($order->id)->delete();
        }
        Customers::where('userId', '=', $id)->delete();
        User::findOrFail($id)->delete();
        $users = User::paginate(15);
        return view('user.index', compact('users'));
    }
}
