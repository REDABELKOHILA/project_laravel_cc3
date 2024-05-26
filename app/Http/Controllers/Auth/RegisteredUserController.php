<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'matricule' => 'required|string|max:255|unique:users',
            'date_naiss_form' => 'required|date',
            'date_recrut' => 'required|date',
            'cin_form' => 'required|string|max:255',
            'login' => 'required|string|max:255|unique:users',
            'email_scol_form' => 'required|string|email|max:255|unique:users',
            'echelle' => 'required|string|max:255',
            'echelon' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'matricule' => $request->matricule,
            'date_naiss_form' => $request->date_naiss_form,
            'date_recrut' => $request->date_recrut,
            'cin_form' => $request->cin_form,
            'login' => $request->login,
            'email_scol_form' => $request->email_scol_form,
            'echelle' => $request->echelle,
            'echelon' => $request->echelon
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
