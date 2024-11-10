<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FishController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('fishescustomer');
    }

    public function index()
    {
        $fishes = Fish::all();
        // return response()->json(["blogs" => $fishes]);
        return view('admin.home', compact('fishes'));
    }

    public function create()
    {
        return view('admin.add-fish');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image',
            // 'image2' => 'required|image',
        ]);

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->all();
            $errorMessage = implode(' ', $errorMessage);
            return redirect()->back()->withErrors($validator)->with('errorMessage', $errorMessage)->withInput();
        }

        $fish = new Fish();
        $fish->name = $request->name;
        $fish->description = $request->description;
        $fish->price = $request->price;

        if ($request->hasFile('image')) {
            $fish->image = $request->image->store('images', 'public');
        }
        // if ($request->hasFile('image2')) {
        //     $fish->image2 = $request->image2->store('images');
        // }
        
        $fish->image2 = '';

        $fish->enabled = 1;
        $fish->save();

        session()->flash('status', "Fish created successfully!");
        return redirect()->route('admin.fishes.index');
    }

    public function edit(Fish $fish)
    {
        return view('admin.fishes.edit', compact('fish'));
    }

    public function update(Request $request, Fish $fish)
    {
        $request->validate([
            'name' => 'required',
            // 'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $fish->name = $request->name;
        $fish->description = $request->description;
        $fish->price = $request->price;

        // Handle image upload
        if ($request->hasFile('image')) {
            $fish->image = $request->image->store('images', 'public');
        }
        // if ($request->hasFile('image2')) {
        //     $fish->image2 = $request->image2->store('images');
        // }

        // $fish->enabled = $request->enabled ?? true;
        $fish->save();

        session()->flash('status', "Fish updated successfully!");
        return redirect()->route('admin.fishes.index');
    }

    public function destroy(Fish $fish)
    {
        $fish->delete();
        return redirect()->route('admin.fishes.index');
    }
    
    public function show($id)
    {
        $fish = Fish::find($id);
        return view('admin.edit-fish', compact('fish'));
    }
    
    public function changestatus($id)
    {
        $fish = Fish::findOrFail($id);
        $fish->enabled = !$fish->enabled;
        $fish->save();
        session()->flash('status', "Stock updated successfully!");
        return redirect()->route('admin.fishes.index')->with('success', 'Fish status updated successfully!');
    }

    public function fishescustomer()
    {   
        $fishes = Fish::all();
        // return response()->json(["blogs" => $fishes]);
        return view('home', compact('fishes'));
    }
}
