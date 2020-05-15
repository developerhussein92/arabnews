@extends('front.main',['title'=>'View Comment'])

@section('content')

    <div class="container my-3">
    
        <p class="alert alert-primary">Comment {{$comment->title}}</p>

        <p>Comment Title: {{$comment->title}} </p>
        <p>Comment desc: {{$comment->desc}} </p>
        

    </div>
@endsection