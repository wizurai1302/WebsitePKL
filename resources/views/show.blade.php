@extends('layouts.mainNavbar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
</head>
<style>
    h5 {
        margin-top: 5vh;
    }
@media only screen and (max-width: 600px) {
  .foto{
    width: 90%;
    height: 90%;
  }
}
</style>
<body>
    <div class="container mt-5">
        <div class="card mt-5">
            <div class="card-header">
                <h2 class="card-title" >{{$perusahaan->nama}}</h2>
            </div>
            <div class="card-body">
                <img src="{{ asset('photos/' . $perusahaan->photo) }}" class="foto rounded mx-auto d-block mt-3" width="40%" height="40%" alt="{{ $perusahaan->name }}">
                <div class="container mt-5 w-75">
                <h5 class="card-text font-bold " style=" text-align: justify;">Jurusan </h5><p style="text-align: justify">{{ $perusahaan->jurusan }}</p>
                <h5 class="card-text"  style="text-align: justify;">Alamat </h5><p style="text-align: justify">{{$perusahaan->alamat}}</p>
                <h5 class="card-text font-bold " style="margin-bottom:1vh; text-align: justify;">Keunggulan </h5><p style="text-align: justify">{{ $perusahaan->keunggulan }}</p>
                <h5 class="card-text"  style="margin-bottom: 1vh; text-align: justify;">About </h5><p style="text-align: justify">{{$perusahaan->about}}</p>
                
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')   
     @endsection
</body>
</html>