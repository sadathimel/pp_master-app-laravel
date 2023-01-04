<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{
    public function index()
    {
        $users= User::all();
        return view('users.index', compact('users')); 
    }
    public function edit(User $user)
    {

        return view('users.edit', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'image' => 'nullable|image',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make( $request->password);
        
        if($request->image){
            // $user->image = $request->image->store('images');
        $image       = $request->file('image');
        $filename    = $image->getClientOriginalName();

        //Fullsize
        $image->move($filename,$filename);

        $image_resize = Image::make($filename.'/'.$filename);
        $image_resize->resize(300, 300);
        $image_resize->save(public_path('upload/users/' .$filename));

        $user->image = $filename;

        }
        $user->save();
        return redirect()->route('user');
    }



    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|max:255|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:8|confirmed',
            'image' => 'nullable|image',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password =Hash::make( $request->password);
        }
        if($request->image){
            // $user->image = $request->image->store('images');
        $image       = $request->file('image');
        $filename    = $image->getClientOriginalName();

        //Fullsize
        $image->move($filename,$filename);

        $image_resize = Image::make($filename.'/'.$filename);
        $image_resize->resize(300, 300);
        $image_resize->save(public_path('upload/users/' .$filename));

        $user->image = $filename;

        }
        $user->save();
        return redirect()->route('user');
    }
}
