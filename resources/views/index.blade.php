@extends('master')
@section('content')
    <div class="container-fluid">
        @session('success')
        <p class="alert alert-success"> {{ session('success') }} </p>
        @endsession
        <div class="d-flex flex-row px-5">
            <a href="{{ route('createCourse') }}" class="btn btn-info ms-auto">Create Course</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Force Reward</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $c)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->title }}</td>
                        <td>{{ $c->force_reward }}</td>
                        <td>{{ $c->role->name }}</td>
                        <td>
                            <a href="#" class="btn btn-info">Detail</a>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
