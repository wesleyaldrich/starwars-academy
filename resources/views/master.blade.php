<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Star Wars Academoy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('indexCourse') }}">{{ __('master.course_list') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">{{ __('master.profile') }}</a>
                    </li>
                </ul>
            </div>
            <form action="{{ route('changeLanguage') }}" method="POST">
                @csrf
                <select id="lang" name="lang" onchange= 'this.form.submit()'>
                    <option value="en" @if (app()->getLocale() == 'en') selected @endif>{{ __('master.english') }}
                    </option>
                    <option value="id" @if (app()->getLocale() == 'id') selected @endif>
                        {{ __('master.indonesian') }}</option>
                </select>
            </form>
        </div>
    </nav>
    @session('success')
        <p class="alert alert-success"> {{ session('success') }} </p>
    @endsession
    @yield('content')
</body>

</html>
