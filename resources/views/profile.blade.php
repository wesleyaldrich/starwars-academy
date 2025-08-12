@extends('master')
@section('content')
    <div class="container-fluid">
        <h6>Hero Name</h6>
        <p>{{ $hero->name }}</p>
        <h6>Force Level</h6>
        <p>{{ $hero->force_level }}</p>
        <h6>Role</h6>
        <p>{{ $hero->role->name }}</p>

        <h6>List of joined courses:</h6>
        @foreach ($hero->courses as $c)
            <p>{{ $c->title }}</p>
        @endforeach
    </div>
@endsection
