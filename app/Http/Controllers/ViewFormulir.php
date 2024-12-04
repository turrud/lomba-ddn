<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;

class ViewFormulir extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulir.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'domicile' => 'required|string|max:255',
            'event' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('bukti_transfer', 'public');

        Formulir::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'institution' => $request->institution,
            'domicile' => $request->domicile,
            'event' => $request->event,
            'image' => $path,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}