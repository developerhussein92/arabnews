@extends('front.main',['title'=>'abas'])

@section('content')
<div class="container my-3">
<p class="alert alert-primary text-center">All Comments</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Comment Title</th>
      <th scope="col">Comment Description</th>
      <th colspan="3" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allcomments as $comment)
    <tr>
      <th scope="row">{{$comment->id}}</th>
      <td>{{$comment->title}}</td>
      <td>{{$comment->desc}}</td>
      <td><a href="/comments/{{$comment->id}}" class="btn btn-success">VIEW</a></td>
      <td><a href="/comments/{{$comment->id}}/edit" class="btn btn-primary">EDIT</a></td>
      <td><a href="/comments/{{$comment->id}}/delete" class="btn btn-danger">DELETE</a></td>
    </tr>
    

@endforeach
</tbody>
</table>
</div>
@endsection