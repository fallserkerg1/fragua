<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $employe = Employe::latest()->get();

        return view('admin.table-employes', compact('employe'));
    }

    public function create(Request $request)
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

    public function edit(Employe $employe){

        return view('admin.employeEdit', compact('employe'));
    }

    public function update(Request $request, Employe $employe){

        $employe->name = $request->name;
        $employe->card = $request->card;
        $employe->class = $request->class;
        $employe->description = $request->description;
        $employe->target = $request->target;

        $employe->save();

        return redirect()->route('admin.employes', $employe);

    }

    public function delete(Employe $employe){

        $employe->delete();

        return redirect()->route('admin.employes', $employe);
    }

}
