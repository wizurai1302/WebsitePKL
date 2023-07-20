<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\perusahaan;
use Illuminate\Http\Request;

class PerusahaanJSONController extends Controller
{
    /**
     * Menampilkan daftar perusahaan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Mengambil semua data perusahaan dari database dan mengembalikan respons JSON.
         *
         * @return \Illuminate\Http\Response
         */
        $perusahaan = perusahaan::all();
        return response()->json(['succes' => true, 'data' => $perusahaan]);
    }

    /**
     * Menampilkan daftar perusahaan dalam tampilan kartu (card view).
     *
     * @return \Illuminate\Http\Response
     */
    public function card()
    {
        /**
         * Mengambil semua data perusahaan dari database dan mengembalikan respons JSON.
         *
         * @return \Illuminate\Http\Response
         */
        $perusahaan = perusahaan::all();
        return response()->json(['succes' => true, 'data' => $perusahaan]);
    }

    /**
     * Menampilkan data perusahaan tertentu berdasarkan ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**
         * Mengambil data perusahaan tertentu dari database berdasarkan ID dan mengembalikan respons JSON.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        $perusahaan = perusahaan::findOrFail($id);
        return response()->json($perusahaan);
    }

    /**
     * Menampilkan form untuk mengedit data perusahaan tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**
         * Mengambil data perusahaan tertentu dari database berdasarkan ID dan mengembalikan tampilan editadmin.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        $perusahaan = perusahaan::findOrFail($id);
        return view('admin.editadmin', compact('perusahaan'));
    }

    /**
     * Memperbarui data perusahaan tertentu dalam penyimpanan (database) dan mengalihkan ke tampilan yang ditentukan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $perusahaan)
    {
        /**
         * Memperbarui data perusahaan tertentu dalam penyimpanan (database) dan mengalihkan ke tampilan yang ditentukan.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $perusahaan
         * @return \Illuminate\Http\Response
         */
        $perusahaan = perusahaan::findOrFail($perusahaan);
        // Memperbarui data dengan nilai-nilai baru
        $perusahaan->nama = $request->nama;
        $perusahaan->about = $request->about;
        $perusahaan->keunggulan = $request->keunggulan;
        $perusahaan->jurusan = $request->jurusan;
        $perusahaan->alamat = $request->alamat;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = $photo->getClientOriginalName();
            $request->photo->move('photos/', $filename);
            $perusahaan->photo = $filename;
        }
        // Menyimpan perubahan ke dalam database
        $perusahaan->save();

        // Mengalihkan kembali ke tampilan yang ditentukan atau halaman yang berbeda
        return redirect()->route('admin.dataperusahaan')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Menghapus data perusahaan tertentu dari penyimpanan (database) dan mengalihkan ke tampilan yang ditentukan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         * Menghapus data perusahaan tertentu dari penyimpanan (database) dan mengalihkan ke tampilan yang ditentukan.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        $perusahaan = perusahaan::findOrFail($id);
        $perusahaan->delete();

        return redirect()->route('admin.dataperusahaan')->with('success', 'Pengguna berhasil dihapus.');
    }
}
