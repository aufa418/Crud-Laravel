@extends('index')

@section('content')
    {{-- <a href="{{ route('create') }}" class="btn btn-primary mt-4 px-4">Create Data</a> --}}
    <a href="/create" class="btn btn-primary mt-4 px-4">Create Data</a>
    <hr>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Class</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($post->count() > 0)
                @foreach ($post as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->age }} Years</td>
                        <td>{{ $data->class }}</td>
                        <td>
                            {{-- <a href="{{ route('edit', $data->id) }}" class="btn btn-warning text-grey">Edit</a> --}}
                            {{-- <form action="{{ route('destroy', $data->id) }}" method="post" class="d-inline">
                                @csrf
                                <button class="btn btn-danger text-grey">Delete</button>
                            </form> --}}
                            <a href="{{ $data->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="{{ $data->id }}/delete" method="post" class="d-inline">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data Not Found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
