@extends('layouts.mainNavbar')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Input</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center;">{{ __('Input Data Siswa') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('store') }}" method="POST">
                          @csrf
                            <div class="form-group row">
                              <label for="Nisn" class="col-sm-2 col-form-label">Nisn</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="Nisn" id="Nisn" placeholder="12345678910">
                              </div>
                            </div>
    
                            <div class="form-group row mt-4">
                                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Nama" id="Nama" placeholder="">
                                </div>
                              </div>
    
                              <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-6">
                                <select name="JK" class="form-control">
                                  <option value="">-Select-</option>
                                  <option value="Laki-Laki">Laki-Laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                              </div>
                              </div>
    
                              <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-md-6">
                                <select name="Kelas" class="form-control">
                                  <option value="">-Select-</option>
                                  <option value="Rekayasa_Perangkat_Lunak">Rekayasa Perangkat Lunak</option>
                                  <option value="Multi_Media">Multi Media</option>
                                  <option value="Teknik_Komputer_Jaringan">Teknik Komputer Jaringan</option>
                                  <option value="BroadCasting">BroadCasting</option>
                                </select>
                              </div>
                              </div>
    
                              <div class="form-group row mt-4">
                                <label for="Kota" class="col-sm-2 col-form-label">Kota</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Kota" id="Kota" placeholder="">
                                </div>
                              </div>

                              <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label">Keahlian</label>
                                <div class="col-md-6">
                                <select name="Keahlian" class="form-control">
                                  <option value="">-Select-</option>
                                  <option value="Java">Java</option>
                                  <option value="Web">Web</option>
                                </select>
                              </div>
                              </div>

                              <button class="btn btn-primary col-sm-12 mt-4 " type="submit">Simpan</button>
    
                          </form>
    
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
