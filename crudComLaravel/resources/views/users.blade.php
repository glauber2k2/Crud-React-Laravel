@extends('master')

@section('content')

<h2>Users</h2>

<ul>
    @foreach ($users as $user)
    <li>{{ $user->firstName }}
        | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
        | <a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a>
        | <a href=""></a>
    </li>
@endforeach
</ul>

@endsection
