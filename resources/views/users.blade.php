<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<ul>
    <li><a href = "{{route('users')}}">Users</a></li>
    <li><a href = ''>Home</a></li>
    <li><a href = "{{route('form')}}">Form</a></li>
</ul>
<div class="paginate">
    @yield('content')
    kek
</div>
</body>
