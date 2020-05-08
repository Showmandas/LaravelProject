@extends('layouts.app')
@section('content')
<h1>Contact page</h1>
<div class="container">
  <form action="{{route('contact.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.." class="form-control">
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." class="form-control">
    </div>
    <div class="form-group">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px" class="form-control"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
    </div>
  </form>
</div> 
@endsection