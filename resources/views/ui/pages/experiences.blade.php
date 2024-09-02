@extends('ui.app')
@section('content')
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Portfolio</h3>
                <h2 class="mb-5"> Projects / Experiences</h2>
            </div>
            @foreach ($exps as $exp)
                <div class="row gx-0 d-flex justify-content-center g-3 mb-5">

                    <div class="col-lg-6">

                        <div class="caption ">
                            <div class="caption-content">
                                <div class="h2">{{ $exp->exp }}</div>
                                <h4>Posisi :{{ $exp->position }}</h4>
                                <p>{{ $exp->periode }}</p>
                                <p class="mb-0">{{ $exp->deskripsi }}</p>
                            </div>
                        </div>

                    </div>

                    <img src="{{ asset('storage/' . $exp->gambar) }}" alt=""
                        style="width: 15rem ;height:10rem; border-radius:10px; padding:0; box-shadow:0 0 15px 4px rgba(0, 0, 0, 0.458);"
                        class="gambar">

                </div>
            @endforeach
        </div>
    </section>
@endsection
