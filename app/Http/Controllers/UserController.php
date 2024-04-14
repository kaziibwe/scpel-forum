<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Thread;
use App\Models\Reaction;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function store(Request $request)
    {
        //
        // dd($request->all());
            $formFields = $request->validate([
                'name' => ['required', 'min:3'],
                'email' => ['required', Rule::unique('users', 'email')],
                'password' => ['required', 'confirmed', 'min:6'],

            ]);


            // Hash password
            $formFields['password'] = bcrypt($formFields['password']);

            // Insert user into the 'users' table
            DB::table('users')->insert($formFields);

            // Authenticate the user
            if (auth()->attempt(['email' => $formFields['email'], 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect('/1')->with('success', 'Logged in successfully!');
            }

            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');

    }

    public function authenticate(Request $request)
    {

        $formFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            // $cookie = request()->cookie('laravel_session');

            $sessionId = session();
            // dd($sessionId);
            //  dd($cookie);
            return redirect('/')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    // logout
    public function logout(Request $request)
    {
        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login-scpel/1')->with('message', 'logged out successfully !');
    }

    public function deleteThread( $id)
    {
        $thread = Thread::find($id);
        $thread->delete();
        return redirect('/')->with('danger', 'Thread Deleted Successfully');
    }

    public function deletereaction( $id)
    {
        $reaction = Reaction::find($id);
        $reaction->delete();
        return redirect('/')->with('danger', 'Reaction Deleted Successfully');
    }


}
