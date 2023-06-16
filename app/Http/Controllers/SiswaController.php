<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('user', compact('siswa'));
        
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function showsiswa(){
        $siswa = Siswa::all();
        return view('admin.datasiswa',compact('siswa'));
    }

    public function exportpdf(){
        $siswa = Siswa::all();

        view()->share('siswa', $siswa);
        $pdf = PDF::loadView('admin.datasiswa-pdf');
        return $pdf-> download('datasiswa.pdf');
    }



    

    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nisn' => 'required',
            'Nama' => 'required',
            'JK' => 'required',
            'Kelas' => 'required',
            'Kota' => 'required',
            'Keahlian' => 'required',
        ]);


        Siswa::create ([
            'Nisn' => $request->Nisn,
            'Nama' => $request->Nama,
            'JK' => $request->JK,
            'Kelas' => $request->Kelas,
            'Kota' => $request->Kota,
            'Keahlian' => $request->Keahlian,
        ]);

        return view('tambahdata');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Siswa::findOrFail($id);

        return view('edit', compact('data'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        
            $siswa = Siswa::findOrFail($id);
            // Update the data with the new values
            $siswa->Nisn = $request->input('Nisn');
            $siswa->Nama = $request->input('Nama');
            $siswa->JK = $request->input('JK');
            $siswa->Kelas = $request->input('Kelas');
            $siswa->Kota = $request->input('Kota');
            $siswa->Keahlian = $request->input('Keahlian');
            // Save the changes to the database
            $siswa->save();

            // Redirect back to the view or a different page
            return redirect()->route('admin.datasiswa')->with('success', 'Data updated successfully');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.datasiswa')->with('success', 'User deleted successfully.');
    }

}
