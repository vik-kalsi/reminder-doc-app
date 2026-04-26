<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function OpenLoginPage()
    {
        return view('pages.login');
    }



    public function LoginUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);


        if (Auth::attempt($validated))
            {
                $request->session()->regenerate();
                //return redirect()->action([NotesController::class, 'OpenViewNotesPage']);
                return redirect()->action([DashboardController::class, 'OpenDashboard']);
            }
            else
                {
                    return redirect()->action([LoginController::class, 'OpenLoginPage'])
                    ->withErrors(['incorrectCredenials' => "Credentials are incorrect"])
                    ->withInput();
                }

    }

}
