<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $users = User::all();
        return view('laravel-examples/rating', ['users' => $users, 'msg' => '']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::all();
        $post = new Post;

        $post->author = 1;
        $post->descr = $request->email;
        // $user->phone = $request->phone;
        // $user->location = $request->location;
        // $user->about_me = $request->about_me;

        $post->save();
        return view('laravel-examples/rating', ['users' => $users, 'msg' => "Everything is ok"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        $user = User::find($id);
        return view('laravel-examples/edit-user-profile', ['user' => $user, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        $user = User::find($id);
        // dd($user ->id, $id);
        return view('laravel-examples/edit-user-profile', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        $user = User::find($id);
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore($user->$id)],
            'phone' => ['max:50'],
            'location' => ['max:70'],
            'about_me' => ['max:150'],
        ]);

        if (Auth::user()->role != 1) {
            return redirect()->back()->withErrors(['msg1' => 'No permission for changing anything']);
        }
        elseif ($request->get('email') != $user->$email && Auth::user() != $user) {
            return redirect()->back()->withErrors(['msg2' => 'You cannot change the email address']);
        }
        else {
            $attribute = request()->validate([
                'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore($user->$id)],
            ]);
        }
        User::where('id', $user->id)
        -> update([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'phone' => $attributes['phone'], 
            'location' => $attributes['location'],
            'about_me' => $attributes['about_me'],
        ]);
        return redirect(route('edit-user-profile', ['user' => $user, 'id' => $user->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        $user = User::find($id);
        
            $user->delete();
        return redirect(route('rating', ['user' => $user, 'id' => $id]));
    }
}
