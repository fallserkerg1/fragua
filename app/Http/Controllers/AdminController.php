<?php

namespace App\Http\Controllers;

use App\Models\Gun;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');

    }

    public function show()
    {
        $guns = Gun::latest('id')->get();

        return view('admin.table', compact('guns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'factory' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $registro = new Gun();

        $registro->name = $request->name;
        $registro->class = $request->class;
        $registro->factory = $request->factory;
        $registro->description = $request->description;
        $registro->price = $request->price;

        $registro->save();

        return redirect()->route('admin.table');
    }


    public function edit(Gun $gun)
    {

        return view('admin.edit', compact('gun'));

    }

    public function update(Request $request, Gun $gun)
    {
        $gun->name = $request->name;
        $gun->class = $request->class;
        $gun->factory = $request->factory;
        $gun->description = $request->description;
        $gun->price = $request->price;

        $gun->save();

        return redirect()->route('admin.table', $gun);

    }

    public function destroy(Gun $gun)
    {
        $gun->delete();

        return redirect()->route('admin.table', $gun);

    }
}
