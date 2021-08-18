<!DOCTYPE html>
<html>
<head>
    <title>Cities</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
</head>
<body>
    <div class="container">
        <h1>Cities App</h1>
        @if(session()->get('success'))
        <div class="toast toast-success">
            {{session()->get('success')}}
        </div>
        @endif
        @yield('content')
    </div>
</body>
</html>