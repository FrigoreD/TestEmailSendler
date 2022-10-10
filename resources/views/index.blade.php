<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogger</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <ul>
        <li><a href = "{{route('users')}}">Users</a></li>
        <li><a href = ''>Home</a></li>
        <li><a href = "{{route('form')}}">Form</a></li>
    </ul>
<div class = 'forms'>
        <form class="user-form"  method="POST" action="{{route('validate.form')}}" novalidate>
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success text-center">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="input-container ic1">
                <input name="username" id="username" class="form-control @error('username') is-invalid @enderror" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="username" class="placeholder">Username</label>
                @error('username')
                <span class = "invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="input-container ic2">
                <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="email" class="placeholder">Email</label>
                @error('email')
                <span class = "invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="text" class="submit">Создать пользователя</button>
        </form>
        <p></p>
        <form class="email-form" method="POST" action="{{route('validate.email')}}" novalidate>
            @csrf
            @if(Session::has('error'))
                <div class="alert alert-success text-center">
                    {{Session::get('error')}}
                </div>
            @elseif(Session::has('successCheck'))
                <div class="alert alert-success text-center">
                    {{Session::get('successCheck')}}
                </div>
            @endif
            <div class="input-container ic3">
                <input name="emailForm" id="emailForm" class="form-control @error('emailForm') is-invalid @enderror" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="email" class="placeholder">Email</label>
            </div>
            @error('emailForm')
            <span class = "invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
            <button type="text" class="submit">Проверить email</button>
        </form>
</div>
</body>
</html>


