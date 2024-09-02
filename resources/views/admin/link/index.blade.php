@extends('admin.layouts.app')
@section('title', 'LINKS')
@section('content')
    <div class="card">

        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('link.create') }}" class="btn btn-primary">Add Link</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Link/Sodmed</th>
                            <th>Link</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($link as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->Name_link }}</td>
                                <td>{{ $data->links }}</td>

                                <td>
                                    <a href="{{ route('link.edit', $data->id) }}" class="btn btn-success btn-sm ">Edit</a>

                                    <form method="POST" action="{{ route('link.destroy', $data->id) }}" class="d-inline">
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
