@extends('master')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('updateCourse', $course->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('form.courseTitle')}}</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="force_reward" class="form-label">Force Reward</label>
                <input type="text" class="form-control" id="force_reward" name="force_reward" value="{{ $course->force_reward }}">
                @error('force_reward')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            Course Role
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role_id" id="flexRadioDefault1" value="1" {{ $course->role_id == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Jedi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role_id" id="flexRadioDefault2" value="2" {{ $course->role_id == 2 ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault2">
                    Sith
                </label>
                @error('role_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
