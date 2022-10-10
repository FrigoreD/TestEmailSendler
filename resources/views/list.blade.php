@extends('users')

@section('content')
    @if(count($users))
        <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Usernames</th>
                <th scope="col">Emails</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>


        {{$users->appends(['s'=>request()->s]) -> links()}}
    @else
        <p>Записей не найдено</p>
    @endif
@endsection
