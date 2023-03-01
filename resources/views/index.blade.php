@extends('layout.main')

@section('content')
    <section id="#hero">
        <div class="hero-content text-center h-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Quran_Kareem.svg" width="210px" alt="">
            <h1 class="fw-700 mt-3">BACA <span> AL QUR'AN</span> <br> TERJEMAHAN BAHASA INDONESIA</h1>
        </div>
    </section>
    <hr class="m-5">
    <section id="list">
        <div class="container">
            <div class="row">
                @foreach ($surah as $all)
                <div class="col-lg-4 col-md-6 col-12 gy-4">
                        <a class="text-decoration-none fc-dark " href="/{{$all['nomor']}}">
                        <div class="card d-flex align-items-stretch">
                        <div class="card-body"> 
                            <div class="row">
                                <div class="col-3 text-center my-auto">
                                    <div class="no-bg rounded-circle py-2">
                                        <p class="mb-0">{{$all['nomor']}}</p>
                                    </div>  
                                </div>
                                <div class="col-6 my-auto">
                                    <p class="mb-0">{{$all['nama']}}</p>
                                    <p class="mb-0 fw-300 fs-s-sm">{{$all['arti']}}</p>
                                </div>
                                <div class="col-3 my-auto text-center">
                                    <p class="mb-0">{{$all['asma']}}</p>
                                    <p class="mb-0 fs-s-sm">{{$all['ayat']}} Ayat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                @endforeach
            </div>
        </div>
            
    </section>
@endsection