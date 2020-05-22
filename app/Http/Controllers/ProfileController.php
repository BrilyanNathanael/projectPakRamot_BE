<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        if(Auth::user()->role === "member")
        {
            $user = Auth::user();
            $profile = User::find($user->id);
            return view('profile', compact('profile'));
        }
        else if(Auth::user()->role === "admin")
        {
            $user = Auth::user();
            $profile = User::find($user->id);
            return view('profileAdmin', compact('profile'));
        }
    }

    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        $validate = null;
        if(Auth::user()->email === $request->email && Auth::user()->username !== $request->username  )
        {
            $validate = $request->validate([
                'username' => 'required|min:4|unique:users',
                'gender' => 'required|in:male,female',
                'place_birth' => 'required',
                'date_birth' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/|confirmed'
            ]);
        }
        else if (Auth::user()->email !== $request->email && Auth::user()->username === $request->username ) 
        {
            $validate = $request->validate([
                'username' => 'required|min:4',
                'gender' => 'required|in:male,female',
                'place_birth' => 'required',
                'date_birth' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/|confirmed'
            ]);
        }
        else if(Auth::user()->email === $request->email && Auth::user()->username === $request->username)
        {
            $validate = $request->validate([
                'username' => 'required|min:4',
                'gender' => 'required|in:male,female',
                'place_birth' => 'required',
                'date_birth' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/|confirmed'
            ]);
        }
        else 
        {
            $validate = $request->validate([
                'username' => 'required|min:4|unique:users',
                'gender' => 'required|in:male,female',
                'place_birth' => 'required',
                'date_birth' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/|confirmed'
            ]);
        }
        if($validate)
        {
            $user->username = $request->username;
            $user->gender = $request->gender;
            $user->place_birth = $request->place_birth;
            $user->date_birth = $request->date_birth;
            $user->email = $request->email;
            
            $user->save();
            if($request->hasFile('password'))
            {
                $user->password = bcrypt($request->password);
            }
            
            return redirect('/');
        }
        else 
        {
            return redirect('/');
        }
    }
}
