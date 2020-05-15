@extends('front.layout')

@section('pagetitle')
New Importer
@endsection

@section('pagecontent')
<h1 class="display-3">New Importer</h1>
  <form action="/importers" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Importer Email:</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">Importer Password:</label>
      <input type="password" name="password" class="form-control">
    </div>
  

    <div class="form-group">
      <label for="captcha">Importer Captcha:</label>
     {!! Recaptcha::render() !!}
    </div>

    <button type="submit" class="btn btn-success btn-lg">Save</button>
    <a href="/customers" class="btn btn-secondary btn-lg">Back</a>
  </form>
@endsection
