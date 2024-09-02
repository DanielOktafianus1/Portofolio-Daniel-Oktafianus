@extends('ui.app')
@section('content')
    <header class="masthead d-flex align-items-center" style="color: rgba(255, 255, 255, 0.901)">
        <div class="container px-4 px-lg-5 text-center">
            <img src="{{ asset('storage/' . $profiles['gambar']) }}" alt="" width="200px" height="200px"
                style="border-radius:50%; border:2px solid white" class="mb-4">
            <h2 class="mb-1">{{ $profiles['name'] }}</h2>
            <h4 class="mb-5"><em>{{ $profiles['deskripsi'] }}</em></h4>

        </div>
    </header>
@endsection
