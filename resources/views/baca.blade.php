@extends('layout.main')

@section('content')
    {{-- <section id="#hero">
        <div class="hero-content text-center h-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Quran_Kareem.svg" width="210px" alt="">
            <h1 class="fw-700 mt-3">BACA <span> AL QUR'AN</span> <br> TERJEMAHAN BAHASA INDONESIA</h1>
        </div>
    </section> --}}
    <hr class="m-5">
    <section id="list">
        <div class="container">
            <div class="row">
                <div class="col-2 d-lg-block d-none pe-0">
                    <div class="nomor-surah text-center">
                        @foreach ($surat as $surahName)
                          <a class=" text-decoration-none fc-dark" href="{{$surahName['nomor']}}"><p>{{$surahName['nama']}}</p></a>
                        @endforeach
                    </div>
                </div>
                <div class="col-1 d-lg-block d-none" id="no-surah">
                    <div class="nomor-surah text-center" >
                        @foreach ($surah as $no)
                          <a class="nav-href text-decoration-none fc-dark" href="#scroll{{$no['nomor']}}"><p>{{$no['nomor']}}</p></a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9">
                    @foreach ($surah as $ayat)
                    <div class="my-5">
                        <div class="row" id="scroll{{$ayat['nomor']}}">
                            <div class="col-2 my-auto">
                                    <p class="text-end">{{$ayat['nomor']}}</p>    
                            </div>
                            <div class="col-10">
                                <h1 class="text-end fw-600 my-auto ">{{$ayat['ar']}}</h1>    
                            </div>
                        </div>
                        <p class="text-end fw-400 opacity-75 fs-sm">{!! ucfirst($ayat['tr'])!!}</p>    
                        <div class="row">
                            <div class="col-1">
                                <p>{{$ayat['nomor']}}</p>    
                            </div>
                            <div class="col-11">
                                <p>{{$ayat['id']}}</p>    
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
            
    </section>
@endsection