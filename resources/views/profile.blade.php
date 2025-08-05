@extends('master')
@section('content')
    <div class="container-fluid">
        <p>Name: {{ $hero->name }}</p>
        <p>Force Level: {{ $hero->force_level }}</p>
        <p>Role: {{ $hero->role->name }}</p>

        <p>Your joined courses:</p>
        @foreach ($hero->courses as $i)
            <p>{{ $i->name }}</p>
        @endforeach
    </div>
@endsection
