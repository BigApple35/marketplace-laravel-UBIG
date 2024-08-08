<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('toko.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('toko.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'lokasi' => 'required',
            "alamat" => "required|max:255",
            'kategori' => 'required',
        ]);

        // Get the selected product


        // Create a new product instance and save it to the database
        $newProduct = new Toko();
        $newProduct->nama = $validated['nama'];
        $newProduct->deskripsi = $validated['deskripsi']; // Assuming you have a product_id field 
        $newProduct->lokasi = $validated['lokasi'];
        $newProduct->alamat = $validated['alamat'];
        $newProduct->user_id = auth()->id();
        $newProduct->save();

        // Redirect or return success message
        return redirect()->route('toko.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toko $toko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toko $toko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toko $toko)
    {
        //
    }
}
