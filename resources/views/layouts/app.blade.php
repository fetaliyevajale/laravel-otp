<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard.index') }}">Ana Səhifə</a></li>
            <li><a href="{{ route('dashboard.users') }}">İstifadəçilər</a></li>
            <li><a href="{{ route('dashboard.blogs') }}">Bloglar</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
