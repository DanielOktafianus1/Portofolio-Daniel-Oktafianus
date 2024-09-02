@extends('admin.layouts.app')
@section('title', 'EDIT SKILL')
@section('content')
    <form action="{{ route('skills.update', $datas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Skill* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="nama_skill" placeholder="Insert your Skill"
                            value="{{ $datas->nama_skill }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Descrition* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="deskripsi"
                            placeholder="Insert your Description" value="{{ $datas->deskripsi }}">
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
