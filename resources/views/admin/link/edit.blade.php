@extends('admin.layouts.app')
@section('title', ' ADD SKILL')
@section('content')

    <form action="{{ route('link.update', $link->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Link/Sosmed Name* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="Name_link"
                            placeholder="Insert your Link/Sosmed Name" value="{{ $link->Name_link }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Link* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="links" placeholder="Insert your Link"
                            value="{{ $link->links }}">
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
