

@extends('front.main',['title'=>'Create New Comment'])

@section('content')

<div class="container">
   <p class="alert alert-primary my-3">Create New Comment</p>
  

   <script>
   
   
     $(document).ready(function(){
       
       $('.btn-sbm').on('click',function(){
          
          var frmdata = $('.ajax-form').serialize();
        
            $.ajax({
            url:$('.ajax-form').attr('action'),
            method:'post',
            dataType:'json',
            data:frmdata,
            success:function(data){
              $('.ajaxcontent').append(data);
              $('.title').val('');
              $('.desc').val('');
            },
   
          });
           return false;
         });
   });
   
   </script>
 <div class="ajaxcontent">
   @foreach (App\comment::all() as $comment)
      <div class="row">
        <div class="col col-4" >{{$comment->title}}</div>
        <div class="col col-8" >{{$comment->desc}}</div>
      </div> 
      <hr/>
   @endforeach
 </div>

 <p class="alert alert-danger my-3">All Results Ends....</p>
   <form method="POST"  class="ajax-form" action="{{ route('comments.store') }}">
   {{csrf_field()}}
  <div class="form-group ">
    <label for="title">Comment Title</label>
    <input type="text" value="{{old('title')}}" name="title"    class="form-control title " id="title" placeholder="title here ...">
    @if($errors->has('title'))<p class ="alert alert-danger">{{$errors->first('title')}}</p>@endif
  </div>

  <div class="form-group">
    <label for="desc">Comment Description</label>
    <textarea class="form-control desc" value="{{old('desc')}}"  name="desc" placeholder="title here ..." id="desc">  </textarea>
    @if($errors->has('desc'))<p class ="alert alert-danger">{{$errors->first('desc')}}</p>@endif
  </div>

  <button type="submit" class="btn btn-success  btn-sbm"> Save </button>

</form>

</div>



@endsection

