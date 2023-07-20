<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class SiswaJSONController extends Controller
{
    /**
     * Menampilkan daftar siswa.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Mengambil semua data siswa dari database dan mengembalikan respons JSON.
         *
         * @return \Illuminate\Http\Response
         */
        $siswa = Siswa::all();
        return response()->json($siswa);
    }

    /**
     * Menampilkan data siswa untuk tambahdata.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahdata()
    {
        /**
         * Mengambil semua data siswa dari database dan mengembalikan respons JSON.
         *
         * @return \Illuminate\Http\Response
         */
        $siswa = Siswa::all();
        return response()->json($siswa);
    }

    /**
     * Menampilkan data siswa untuk showsiswa.
     *
     * @return \Illuminate\Http\Response
     */
    public function showsiswa()
    {
        /**
         * Mengambil semua data siswa dari database dan mengembalikan respons JSON.
         *
         * @return \Illuminate\Http\Response
         */
        $siswa = Siswa::all();
        return response()->json($siswa);
    }

    /**
     * Export data siswa ke file PDF dan mengunduhnya.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportpdf()
    {
        /**
         * Mengambil semua data siswa dari database, membagikan variabel 'siswa' ke view 'admin.datasiswa-pdf',
         * kemudian membuat file PDF dan mengunduhnya dengan nama 'datasiswa.pdf'.
         *
         * @return \Illuminate\Http\Response
         */
        $siswa = Siswa::all();

        view()->share('siswa', $siswa);
        $pdf = PDF::loadView('admin.datasiswa-pdf');
        return $pdf->download('datasiswa.pdf');
    }

    /**
     * Menampilkan form untuk membuat data siswa baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home');
    }

    /**
     * Menyimpan data siswa baru ke dalam penyimpanan (database).
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

        Siswa::create([
            'Nisn' => $request->Nisn,
            'Nama' => $request->Nama,
            'JK' => $request->JK,
            'Kelas' => $request->Kelas,
            'Kota' => $request->Kota,
            'Keahlian' => $request->Keahlian,
        ]);

        return response()->json($request);
    }

    /**
     * Menampilkan data siswa tertentu.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Menampilkan form untuk mengedit data siswa tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Siswa::findOrFail($id);

        return view('edit', compact('data'));
    }

    /**
     * Memperbarui data siswa tertentu dalam penyimpanan (database).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        // Update data dengan nilai-nilai baru
        $siswa->Nisn = $request->input('Nisn');
        $siswa->Nama = $request->input('Nama');
        $siswa->JK = $request->input('JK');
        $siswa->Kelas = $request->input('Kelas');
        $siswa->Kota = $request->input('Kota');
        $siswa->Keahlian = $request->input('Keahlian');
        // Menyimpan perubahan ke dalam database
        $siswa->save();

        // Mengalihkan kembali ke tampilan yang ditentukan atau halaman yang berbeda
        return redirect()->route('admin.datasiswa')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Menghapus data siswa tertentu dari penyimpanan (database).
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.datasiswa')->with('success', 'Pengguna berhasil dihapus.');
    }
}
