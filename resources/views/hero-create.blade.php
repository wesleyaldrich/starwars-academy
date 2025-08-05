@extends('master')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('hero.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{ __('form.course_role')}}
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role_id" id="flexRadioDefault1" value="1" {{ old('role_id') == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Jedi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role_id" id="flexRadioDefault2" value="2" {{ old('role_id') == 2 ? 'checked' : '' }}>
                <label class="form-check-label" for="flexRadioDefault2">
                    Sith
                </label>
                @error('role_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{ __('form.submit')}}</button>
        </form>
    </div>
@endsection
