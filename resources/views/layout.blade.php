
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        body {
            margin: 5%;
        }
    </style>
</head>
<body>
<nav>
    {{-- <div class="d-flex justify-content-around">
        <div><a href="/">Home</a></div>
        <div><a href="/about">About</a></div>
        <div><a href="/contact">Contact</a></div>
        <div><a href="/projects">Projects</a></div>
    </div> --}}

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>            <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>            <li class="nav-item">
            <a class="nav-link" href="/projects">Projects</a>
        </li>
    </ul>

</nav>

    @yield('content')
</body>
</html>
