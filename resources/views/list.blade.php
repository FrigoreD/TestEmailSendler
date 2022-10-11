@extends('users')

@section('content')
    @if(count($users))
        <div class = 'allTable'>
        <table class="table">
            <thead class = 'thread'>
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

            {!! $users-> links() !!}
    @else
        <p>Записей не найдено</p>
    @endif
@endsection
