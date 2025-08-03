@extends('master')
@section('content')
    <div class="container-fluid d-flex flex-row">
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
            <h1 class="">{{ $course->title }}</h1>
            <h3>{{ $course->force_reward }}</h3>
            <h2>{{ $course->role->name }}</h2>
            <button class="btn btn-info">{{ __('detail.join_course')}}</button>
        </div>
    </div>
@endsection
