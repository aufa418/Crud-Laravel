@extends('index')

@section('content')
    <div class="mt-3">
        <h2>Form Create Data</h2>
        <hr>
        <div class="w-50">
            {{-- <form action="{{ route('store') }}" method="post"> --}}
            <form action="/" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}">
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input type="text" class="form-control" id="class" name="class" value="{{ old('class') }}">
                </div>

                <button type="submit" class="btn btn-primary px-4 mt-5">Submit</button>
                {{-- <a href="{{ route('index') }}" class="btn px-4 mt-5">Back</a> --}}
                <a href="/" class="btn px-4 mt-5">Back</a>
            </form>
        </div>
    </div>
@endsection
