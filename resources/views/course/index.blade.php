<x-app title='Course List'>
    <div class="container-fluid mt-3">
        @session('success')
            <div class="alert alert-success">{{ session('success') }}</div>
        @endsession
        <div class="d-flex flex-row">
            <a href="{{ route('course.create')}}" class="ms-auto btn-success btn">
                Create
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
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
</x-app>
