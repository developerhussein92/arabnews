@if(count($errors) > 0 )
    <div class="alert alert-danger my-3">Errors Here</div>
    <ul>
    @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
    @endforeach
    </ul>
@endif