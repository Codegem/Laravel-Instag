<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
       
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        // $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        // $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        if (request('image'))
        {
            $imagePath = request('image')->store('profile', 'public');

            // composer require intervention/image
        
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(350, 350);
            $image->save();
        
        }
        auth()->user()->profile()->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        // return redirect('/profile/{$user->id}', compact('user'));
    return redirect('/profile/' . auth()->user()->id);

    }
}
