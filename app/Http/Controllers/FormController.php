<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

use Redirect;
use Session;

class FormController extends Controller
{
    public function get(Request $request)
    {
        return view('form', [

        ]);
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users|confirmed',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->option = $request->option;
        $user->m = $request->m;
        $user->t = $request->t;
        $user->w = $request->w;
        $user->su = $request->su;
        $user->save();

        Session::flash('success', 'Submission Succesful!');
        return Redirect::route('form');
    }
}
