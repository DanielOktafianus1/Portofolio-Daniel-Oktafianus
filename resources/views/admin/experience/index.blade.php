@extends('admin.layouts.app')
@section('title', 'EXPERIENCE')
@section('content')
    <div class="card">

        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('experience.create') }}" class="btn btn-primary">Add Experience</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Experience/Project</th>
                            <th>Position</th>
                            <th>Periode</th>
                            <th>Picture</th>
                            <th>Descriptions</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($exps as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->exp }}</td>
                                <td>{{ $data->position }}</td>
                                <td>{{ $data->periode }}</td>
                                <td><img src="{{ asset('storage/' . $data->gambar) }}" alt=""
                                        style="width: 5rem ;height:5rem"></td>
                                <td>{{ $data->deskripsi }}</td>

                                <td>
                                    <a href="{{ route('experience.edit', $data->id) }}"
                                        class="btn btn-success btn-sm ">Edit</a>

                                    <form method="POST" action="{{ route('experience.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
