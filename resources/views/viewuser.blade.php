@extends('layout')

@section('title', 'View Single User')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">User Details</h2>

        <table class="table table-striped table-bordered">
            <tr>
                <th width="150px">Name :</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Age :</th>
                <td>{{ $user->age }}</td>
            </tr>
            <tr>
                <th>City :</th>
                <td>{{ $user->city }}</td>
            </tr>
        </table>

        <div class="mt-3">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
            {{-- <a href="{{ route('users.edit', $student->id) }}" class="btn btn-warning">Edit</a> --}}
        </div>
    </div>
@endsection
