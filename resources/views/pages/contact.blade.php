@extends('main')
@section('title', '| Contact')
@section ('content')
  <div class="row">
    <div class="col-md-8">
      <h1>Contact Me</h1>
      <hr>
      <form >
        <div class="form-group">
          <label name="email"> Email:</label>
          <input id="email" name="email"  class="form-cotrol">
        </div>
        <div class="form-group">
          <label name="Subject"> Subject:</label>
          <input id="Subject" class="form-cotrol" name="Subject" >
        </div>
        <div class="form-group">
          <label name="message"> Message</label>
          <textarea id="message" class="form-cotrol" name="message" > Type your message here ...</textarea>
        </div>
        <input type="submit" name="" value="Send message" class="btn btn-success">
      </form>
    </div>

  </div>
@endsection
