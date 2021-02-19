@extends('welcome')

@section('content')
    <header>
        <span class="avatar"><img src="{{ asset('images/users/'.$user->id.'.jpg')}}" alt="" /></span>
        <h1>{{$user->name}}</h1>
        <p>{{nl2br($user->comments)}}</p>
    </header>
@endsection