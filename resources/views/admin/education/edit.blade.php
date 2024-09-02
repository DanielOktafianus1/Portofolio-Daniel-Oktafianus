@extends('admin.layouts.app')
@section('title', 'EDUCATION EDIT')
@section('content')
    <form action="{{ route('education.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Education* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="pendidikan"
                            placeholder="Insert your Education" value="{{ $edit->pendidikan }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Periode* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="periode" placeholder="Insert your Periode"
                            value="{{ $edit->periode }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Description* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="deskripsi"
                            placeholder="Insert your Description" value="{{ $edit->deskripsi }}">
                    </div>
                </div>



                <div class="mb-3 row">
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
