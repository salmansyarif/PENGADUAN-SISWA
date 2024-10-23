<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Siswa::all(); // Fetching data from the Siswa model3

        return view('guru.index')->with(compact('gurus')); // Passing the data to the view
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
        //
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
        $gurus = Siswa::findOrFail($id);

    
        return view('guru/edit', compact('gurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        $gurus = Siswa::findOrFail($id);

        $validatedData = $request->validate([
            'solusi' => 'required|string:max:255',
            'status'=>'required|in:belum,sudah',
        ]);

        $gurus->solusi = $validatedData['solusi'];
        $gurus->status = $validatedData['status'];
        
        $gurus->save();

        return redirect()->route('guru.index')->with('success','Data Eror');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
