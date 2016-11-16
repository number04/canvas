<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

use Redirect;
use Session;

class SoccerController extends Controller
{
    public function get(Request $request)
    {
        return view('soccer', [

        ]);
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users_football|confirmed',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->m = $request->m;
        $user->t = $request->t;
        $user->w = $request->w;
        $user->th = $request->th;
        $user->f = $request->f;
        $user->s = $request->s;
        $user->su = $request->su;
        $user->save();

        Session::flash('success', 'Submission Succesful!');
        return Redirect::route('soccer');
    }
}
