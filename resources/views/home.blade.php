@extends('master')
@section('title', 'Home')

@section('content')
<!-- Content Start -->
<center><h1>Management books system | Searching by ISBN:</h1></center>
<center><div class="large-6 medium-6 columns">
<form action="/details" method="get">
  <fieldset>
    <legend>Write book's ISBN:</legend>

    <label>Input Label
      <input type="text" name="isbn" placeholder="Write your ISBN here" /><input type="submit" name="Search" value="Search" class="small radius button"><br/>
    </label>
  </fieldset>
</form>
</div></center>
<!-- Content End -->
@endsection