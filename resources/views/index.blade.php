@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-row px-5">
            <a href="{{ route('createCourse') }}" class="btn btn-info ms-auto">{{ __('index.create_course')}}</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ __('index.number')}}</th>
                    <th scope="col">ID</th>
                    <th scope="col">{{ __('index.title')}}</th>
                    <th scope="col">{{ __('index.force_reward')}}</th>
                    <th scope="col">{{ __('index.role')}}</th>
                    <th scope="col">{{ __('index.action')}}</th>
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
                            <div class="d-flex flex-row gap-2">
                                <a href="{{ route('showCourse', $c->id) }}" class="btn btn-info">{{__('index.view')}}</a>
                                <a href="{{ route('editCourse', $c->id) }}" class="btn btn-success">{{__('index.edit')}}</a>
                                <form action="{{ route('deleteCourse', $c->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                <button type="submit" class="btn btn-danger">{{__('index.delete')}}</button>
                                </form>
                            </div class="d-flex flex-row gap-2">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $courses->links() }}
        </div>
    </div>
@endsection
