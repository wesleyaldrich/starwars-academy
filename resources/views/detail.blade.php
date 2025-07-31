@extends('master')
@section('content')
    <div class="container-fluid d-flex flex-row">
        @session('success')
        <p class="alert alert-success"> {{ session('success') }} </p>
        @endsession
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
            <h1 class="">{{ $course->title }}</h1>
            <h3>{{ $course->force_reward }}</h3>
            <h2>{{ $course->role->name }}</h2>
            <button class="btn btn-info">Join Course</button>
        </div>
    </div>
@endsection
