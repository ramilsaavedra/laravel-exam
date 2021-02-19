@extends('welcome')

@section('content')
    <header>
        <span class="avatar"><img src="{{ asset('images/users/'.$user->id.'.jpg')}}" alt="" /></span>
        <h1>{{$user->name}}</h1>
        @foreach ($user->comments as $comment)
            <p>{{nl2br($comment->body)}}</p>
        @endforeach
        <form action="{{route('store_comment')}}" method='POST'>
            @csrf
            <input type="hidden" name="user_id" id="" value='{{$user->id}}'>
            <label for="comment">Write a Comment</label>
            <textarea name="body" id="comment" cols="30" rows="4" required></textarea>
            <input style='margin-top: 10px' type="password" name='password' id="password" placeholder="enter password" required/>
            <input style='margin-top: 10px; width: 100%' type="submit" value='Add Comment' />
        </form>
    </header>
@endsection