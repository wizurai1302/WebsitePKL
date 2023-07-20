<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = perusahaan::all();
        return view ('home', compact('perusahaan'));
    }

    public function card()
    {
        $perusahaan = perusahaan::all();
        return view('card',compact('perusahaan'));
    }

    public function showperusahaan(){
        $perusahaan = perusahaan::all();
        return view('admin.dataperusahaan',compact('perusahaan'));
    }




    



    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => 'required',
            'about' => 'required',
            'keunggulan' => 'required',
            'photo' => 'required|image|max:2048',
            
        ]);


        $name = $request->file('photo')->getClientOriginalName();
    
        $request->photo->move('photos/',$name);


            
        perusahaan::create([
            'nama' => $request->nama,
            'about' => $request->about,
            'keunggulan' => $request->keunggulan,
            'photo' => $name,
            'category_id' =>$request->category_id,
            'jurusan' =>$request->jurusan,
            'alamat' =>$request->alamat,
        ]);
    
        return redirect()->route('card')->with('success', 'Voting created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(perusahaan $perusahaan, $id)
    {  
            $perusahaan = perusahaan::FindOrFail($id);
            return view('show',compact('perusahaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perusahaan = perusahaan::findOrFail($id);

        return view('admin.editadmin', compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $perusahaan )
    {
        $perusahaan = perusahaan::findOrFail($perusahaan);
        // Update the data with the new values
        $perusahaan->nama = $request->nama;
        $perusahaan->about = $request->about;
        $perusahaan->keunggulan = $request->keunggulan;
        $perusahaan->jurusan = $request->jurusan;
        $perusahaan->alamat = $request->alamat;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = $photo->getClientOriginalName();
            $request->photo->move('photos/',$filename);
            $perusahaan->photo = $filename;
        // Save the changes to the database
        $perusahaan->save();

        // Redirect back to the view or a different page
        return redirect()->route('admin.dataperusahaan')->with('success', 'Data updated successfully');
    }
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perusahaan = perusahaan::findOrFail($id);
        $perusahaan->delete();

        return redirect()->route('admin.dataperusahaan')->with('success', 'User deleted successfully.');
    }
}
