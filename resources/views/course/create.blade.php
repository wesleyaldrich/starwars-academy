<x-app title='Create Course'>
    <form action="{{ route('course.store') }}" method="POST" class="m-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" class="form-control" id="title" name="title" value={{ old('title') }}>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="force_reward" class="form-label">Force Reward</label>
            <input type="text" class="form-control" id="force_reward" name="force_reward" value={{ old('force_reward') }}>
            @error('force_reward')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            Role
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role_id" id="jedi" value="1" {{ old('role_id') == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="jedi">
                    Jedi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role_id" id="sith" value="2" {{ old('role_id') == 2 ? 'checked' : '' }}>
                <label class="form-check-label" for="sith">
                    Sith
                </label>
                @error('role_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </x-app>
