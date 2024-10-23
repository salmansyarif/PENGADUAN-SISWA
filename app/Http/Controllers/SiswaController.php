<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
{
    $siswas = Siswa::all(); // Fetching data from the Siswa model3

    return view('siswa.index')->with(compact('siswas')); // Passing the data to the view
}


    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pelapor' => 'required|string:max:255',
            'terlapor' => 'required|string:max:255',
            'kelas' => 'required|string:max:255',
            'laporan' => 'required|string:max:255',
           'bukti' => 'required|image|mimes:png,jpg,jpeg|max:2048',
          


        ]);
        $bukti = $request->file('bukti');
        $bukti->storeAs('bukti', $bukti->hashName(), 'public'); 



        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $validatedData['bukti'] = '/images/'.$name;
        }


        Siswa::create($validatedData);
            // 'pelapor' -> $request->pelapor,
            // 'terlapor' -> $request->terlapor,
            // 'kelas' -> $request->kelas,
            // 'laporan' => $request->laporan,
            // 'bukti' => $request->bukti,
            // 'status' => 'sedang dalam tinjaun',

        

        return redirect('siswa');
       
    }
}