<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class DeleteAccountController extends Controller
{
    public function OpenDeleteAccountPage()
    {
        return view('pages.deleteaccount');
    }



    public function DeleteAccount($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/login')
        ->with('AccountDeletedSuccess', 'Account succesfully deleted');
    }
}
