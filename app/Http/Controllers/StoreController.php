<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use Validator;

class StoreController extends Controller
{
    public function home(){
        $clothes = Clothes::all();
        return view('home', compact('clothes'));
    }

    public function search(){
        return view('search');
    }

    public function history(){
        return view('history');
    }

    public function user(){
        return view('user');
    }

    public function cart(){
        return view('cart');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg', 
            'name' =>'required|min:5|max:20', 
            'description' => 'required|min:5', 
            'price' => 'required', 
            'stock' => 'required'
        ]);

        // insert
        $imageFile = $request->file('image');
        $new_name = time() . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move(public_path('storage/images'), $new_name);

        Clothes::create([
            'image' => $new_name, 
            'name' => $request->name, 
            'description' => $request->description, 
            'price' => $request->price, 
            'stock' => $request->stock
        ]);

        return redirect('/home')->with('success', 'Data Success');
    }
}
