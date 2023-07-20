<?php

namespace App\Http\Controllers;
use App\Models\perusahaan;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::where('category_id', 1)->get();
        return response()->json(compact('perusahaan'));
    }
    
    public function jabodetabek()
    {
        $perusahaan = Perusahaan::where('category_id', 6)->get();
        return response()->json(compact('perusahaan'));
    }
    
    public function batam()
    {
        $perusahaan = Perusahaan::where('category_id', 2)->get();
        return response()->json(compact('perusahaan'));
    }
    
    public function pekanbaru()
    {
        $perusahaan = Perusahaan::where('category_id', 4)->get();
        return response()->json(compact('perusahaan'));
    }
    
    public function padang()
    {
        $perusahaan = Perusahaan::where('category_id', 5)->get();
        return response()->json(compact('perusahaan'));
    }
    
    // jurusan
    
    public function rpl()
    {
        $perusahaan = Perusahaan::whereIn('jurusan', ['Rekayasa Perangkat Lunak'])->get();
        return response()->json(compact('perusahaan'));
    }
    
    public function mm()
    {
        $perusahaan = Perusahaan::whereIn('jurusan', ['Multi Media'])->get();
        return response()->json(compact('perusahaan'));
    }
    
    public function tkj()
    {
        $perusahaan = Perusahaan::whereIn('jurusan', ['Teknik Komputer Jaringan'])->get();
        return response()->json(compact('perusahaan'));
    }
    
    public function bc()
    {
        $perusahaan = Perusahaan::whereIn('jurusan', ['BroadCasting'])->get();
        return response()->json(compact('perusahaan'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
