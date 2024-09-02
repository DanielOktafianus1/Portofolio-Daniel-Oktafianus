@extends('admin.layouts.app')
@section('title', 'SKILLS ADD')
@section('content')

    <form action="{{ route('link.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Link/Sodmed Name* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="Name_link"
                            placeholder="Insert your Link Name">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <label for="">Link* :</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" name="links" placeholder="Insert your Link">
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
