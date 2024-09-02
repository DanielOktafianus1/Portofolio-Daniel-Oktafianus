@extends('admin.layouts.app')
@section('title', 'SKILLS')
@section('content')
    <div class="card">

        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('skills.create') }}" class="btn btn-primary">Add Skill</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Skills</th>
                            <th>Descriptions</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_skill }}</td>
                                <td>{{ $data->deskripsi }}</td>

                                <td>
                                    <a href="{{ route('skills.edit', $data->id) }}" class="btn btn-success btn-sm ">Edit</a>

                                    <form method="POST" action="{{ route('skills.destroy', $data->id) }}" class="d-inline">
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
