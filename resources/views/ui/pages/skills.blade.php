@extends('ui.app')
@section('content')
    <br>
    <br>
    <h2 style="text-align: center; color:rgb(184, 170, 46) ">Skills</h2>
    @foreach ($skills as $skill)
        <section class="p-3" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="card-body shadow p-5" style="border-radius:30px">
                            <h3>
                                {{ $skill->nama_skill }}
                            </h3>
                            <p>
                                {{ $skill->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
