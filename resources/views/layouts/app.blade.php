<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <livewire:styles />
</head>
<body>
    <div class="container m-2">
        <h1>@yield('title')</h1>
        <div class="mt-1">
            @yield('content')
        </div>
    </div>
    <livewire:scripts />
</body>
</html>