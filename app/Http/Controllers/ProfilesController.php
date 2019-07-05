<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user) {

        // let laravel take care of error response
        $user = User::findOrFail($user);

        return view('profiles.index',[
            'user' => $user
        ]);
    }

    // bind argument to \App\User type
    public function edit(User $user) {

        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {

        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        auth()->user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
