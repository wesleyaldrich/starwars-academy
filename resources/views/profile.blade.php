@extends('master')
@section('content')
    <div class="container-fluid">
        <h6>Hero Name</h6>
        <h6>{{ $hero->name }}</h6>
        <h6>Force Level</h6>
        <h6>{{ $hero->force_level }}</h6>
        <h6>Role</h6>
        <h6>{{ $hero->role->name }}</h6>

        <h6>List of Joined Courses:</h6>
        @foreach ($hero->courses as $c)
            <p>{{ $c->title }}</p>
        @endforeach
    </div>
@endsection
