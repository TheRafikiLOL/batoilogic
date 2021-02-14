<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->address =  $request->get('address');
        $user->email =  $request->get('email');
        $user->password =  bcrypt($request->get('password'));
        $user->photo =  "placeholder.png";
        $user->rol =  "customer";

        if ($request->get('password')===$request->get('password2'))
        {
            // Autenticación exitosa
            $customer = new Customers();

            $user->save();
            auth()->login($user);

            $customer->userId = auth()->user()->id;
            $customer->save();
            return redirect()->intended(route('productos.index'));
        } else {
            $error = 'Las contraseñas no coinciden';
            return view('auth.register', compact('error'));
        }
    }
}
