@extends('master')

@section('content')

<h2>Create</h2>

@if(session()->has('message'))
{{ session()->get("message") }}
@endif

<form action="{{ route('users.store') }}" method="post">

@csrf
<input type="text" name="firstName">
<input type="text" name="lastName">
<input type="text" name="email">
<input type="text" name="password">
<button type="submit">Create</button>
</form>

@endsection
