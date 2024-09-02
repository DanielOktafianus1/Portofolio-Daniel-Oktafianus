@extends('admin.layouts.app')
@section('title', ' ADD SKILL')
@section('content')

    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Skill* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="nama_skill" placeholder="Insert your Skill">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Description* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="deskripsi"
                            placeholder="Insert your Description">
                    </div>
                </div>


                <div class="mb-3 row">
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection
