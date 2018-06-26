@extends('_layouts.master')

@section('body')
    <form action="" id="contact-us">
      <lable for="name">Name</lable>
      <input type="text" name="name" id="name" class="form-control">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control">
      <label for="message">Message</label>
      <textarea name="message" id="message" cols="30" rows="10" noresize></textarea>
      <button>Submit</button>
    </form>
@endsection