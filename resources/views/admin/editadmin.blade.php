<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Data Perusahaan</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center;">{{ __('Edit Data Perusahaan') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('update-perusahaan', $perusahaan->id) }}" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group row">
                              <label for="nama" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="" value="{{ $perusahaan->nama }}">
                              </div>
                            </div>
    
                            <div class="form-group row mt-4">
                                <label for="about" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="about" id="about"  rows="3">{{ $perusahaan->about }}</textarea>
                                </div>
                            </div>
    
                            <div class="form-group row mt-4">
                                <label for="keunggulan" class="col-sm-2 col-form-label">Keunggulan Perusahaan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="keunggulan" id="keunggulan"  rows="3">{{ $perusahaan->keunggulan }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label">Jurusan</label>
                                <div class="col-md-6">
                                <select name="jurusan" class="form-control" value="{{ $perusahaan->jurusan }}">
                                  <option value="">-Select-</option>
                                  <option value="Rekayasa_Perangkat_Lunak">Rekayasa Perangkat Lunak</option>
                                  <option value="Multi_Media">Multi Media</option>
                                  <option value="Teknik_Komputer_Jaringan">Teknik Komputer Jaringan</option>
                                  <option value="BroadCasting">BroadCasting</option>
                                </select>
                              </div>
                              </div>

                            <div class="form-group row mt-4">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" id="alamat"  rows="3">{{ $perusahaan->alamat }}</textarea>
                                </div>
                            </div>
    
                            <div class="container">
                                <label class="form-label" for="photo">Input Foto</label>
                                <input type="file" class="form-control" name="photo" id="photo" onchange="previewPhoto(event)" accept="image/*" />
                                <img id="photoPreview" alt="Preview Foto" style="display: none; max-width: 300px; max-height: 300px; margin-left:250px; margin-top:25px;" src="{{ asset($perusahaan->photo) }}" />
                            </div>
                            
                            <script>
                                function previewPhoto(event) {
                                    var input = event.target;
                                    var preview = document.getElementById("photoPreview");
                            
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                            
                                        reader.onload = function (e) {
                                            preview.src = e.target.result;
                                            preview.style.display = "block";
                                        };
                            
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                            
                            
                            <button class="btn btn-primary col-sm-12 mt-4" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
