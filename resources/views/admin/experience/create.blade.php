@extends('admin.layouts.app')
@section('title', 'ADD EXPERIENCE')
@section('content')
    <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Name company /Organisation/ Project* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="exp"
                            placeholder="Insert your Name company/organisation">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Position* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="position"
                            placeholder="Insert your Position">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Periode* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="periode"
                            placeholder="Insert your Periode">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Picture* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="file" class="form-control" name="picture"
                            placeholder="Insert your Rincture">
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
