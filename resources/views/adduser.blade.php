@extends('layout')

@section('title', 'Add New User')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Add New User</h2>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" required>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            {{-- <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a> --}}
        </form>
    </div>
@endsection
