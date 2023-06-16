@extends('layouts.app')

@section('content')

<style>
    .description{
        max-height:98px;
        overflow: hidden;
    }
    
</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="text-align:center;">{{ __('Teknik Komputer Jaringan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                        @if($perusahaan->count() > 0)
                            @foreach($perusahaan as $a)
                                <div class="col mb-4">
                                    <div class="card h-100">
                                        <img src="{{ asset('photos/' . $a->photo) }}" class="card-img-top" style="object-fit:inherit; height: 180px; width:100%;" alt="{{ $a->name }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $a->name }}</h5>
                                            <div class="card-text description" id="description_{{ $a->id }}">
                                                <p class="font-weight-bold" style="text-align:justify;">Nama Perusahaan: {{ $a->nama }}</p>
                                                <p style="text-align: justify;">Jurusan: {{ $a->jurusan }}</p>
                                                <p style="text-align: justify;">Keunggulan: {{ $a->keunggulan }}</p>
                                                <p style="text-align: justify;">About: {{ $a->about }}</p>
                                            </div>                       
                                            <a href="{{ route('show', $a->id) }}" class="btn btn-primary btn-block mt-3" data-id="{{ $a->id }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection

