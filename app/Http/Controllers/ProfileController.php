<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function me()
    {
        $user = User::find(auth()->user()->id);
        if ($user->dob == null)
            $user->dob = '';

        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $request->validate([
            'email' => 'required|unique:users,email,' . $request->user_id,
        ]);

        $data = $request->all();

        if ($request->dob == null) {
            $data['dob'] = $user->dob;
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->dob = $data['dob'];
        $user->gender = $data['gender'];
        $user->save();
        
    }
}
