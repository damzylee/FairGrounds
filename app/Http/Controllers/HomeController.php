<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return view('admin');
    }

    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedUser = tap(request()->validate([

            'name' => 'required|min:4',
            'email' => 'required | email',
            'number' => 'required | numeric',
            'country' => 'required | min:3',
            'state' => 'min:3',
            'town' => 'min:7',
            'type' => 'required',
            'BIOS' => 'max:255',
            'DOB' => 'date | before_or_equal:today'

        ]), function(){
            
                if(request()->hasFile('image'))
                {
                    request()->validate([
                        'image' => 'file|image|max:10000'
                    ]);
                }
        }
    );
        $user->update($validatedUser);

        return view('profile.show', compact('user'));
    }

    public function delete(User $user)
    {
        $user->delete();
    }

}
