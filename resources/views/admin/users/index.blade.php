@extends('admin.layouts.app')
@section('title', 'PROFILE')
@section('content')
    <div class="card">

        <div class="card-body">
            {{-- <div align="right" class="mb-3">
                <a href="" class="btn btn-primary">Tambah User</a>
            </div> --}}
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Photo</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td><img src="{{ asset('storage/' . $data->gambar) }}" alt=""
                                        style="width: 5rem ;height:5rem"></td>
                                <td>
                                    {{ $data->deskripsi }}
                                </td>
                                <td>
                                    <a href="{{ route('users.edit', $data->id) }}" class="btn btn-success ">Edit</a>

                                    {{-- <form method="POST" action="{{ route('users.destroy') }}" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                                </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
