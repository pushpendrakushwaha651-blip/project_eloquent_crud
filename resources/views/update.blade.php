@extends('layout')

@section('title', 'Update User Data ')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Update User</h2>

    <!-- Form action must include the student ID -->
    <form action="{{ route('users.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text"
                   class="form-control"
                   id="name"
                   name="name"
                   value="{{ old('name', $student->name) }}"
                   required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email"
                   class="form-control"
                   id="email"
                   name="email"
                   value="{{ old('email', $student->email) }}"
                   required>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number"
                   class="form-control"
                   id="age"
                   name="age"
                   value="{{ old('age', $student->age) }}"
                   required>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text"
                   class="form-control"
                   id="city"
                   name="city"
                   value="{{ old('city', $student->city) }}"
                   required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
