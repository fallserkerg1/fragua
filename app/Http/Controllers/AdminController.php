<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Gun;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function table(){

        $guns = Gun::latest('id')->get();

        return view('admin.table', compact('guns'));
    }

    public function employes()
    {
        $employe = Employe::latest()->get();

        return view('admin.table-employes', compact('employe'));
    }

    public function employe(Request $request)
    {
        $registro = new Employe();

        $registro->name = $request->name;
        $registro->card = $request->card;
        $registro->class = $request->class;
        $registro->description = $request->description;
        $registro->target = $request->target;

        $registro->save();

        return redirect()->route('admin.employes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gun $gun)
    {
        return view('admin.edit', compact('gun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
