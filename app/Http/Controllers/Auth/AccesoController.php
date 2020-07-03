<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AccesoController extends Controller
{
    public function login()
    {
        $credentials = $this->validate(
            request(),
            [
                'email' => 'required|string',
                'password' => 'required|string'
            ]
        );
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email'=>'No concuerda con los registros'])
        ->withInput(request(['email']));
    }
}
