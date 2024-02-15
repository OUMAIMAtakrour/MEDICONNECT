<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MedicinesController extends Controller
{

    public function index()
    {
        $medicines = Medicine::all();
        // dd($medicines);
        return view('medicine', [
            'medicines' => $medicines

        ]);
    }

    public function create()
    {
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'medicine_name' => 'required',
            'price' => 'required',
        ]);

        Medicine::create($validatedData);

        return redirect()->route('doctor')->with('success', 'Medicine created successfully!');
    }
    public function edit($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicine.edit', compact('medicine'));
    }
}
