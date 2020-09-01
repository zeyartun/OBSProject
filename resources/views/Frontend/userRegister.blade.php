@extends('FrontEnd.layouts.master')
@section('title','login')
@section('content')
<div class="container">

    <div class="section-title mt-5">
      <h2>Register Form</h2>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-5 col-md-12" data-aos-delay="300">
        <form action="" method="post">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
            <div class="validate"></div>
          </div>
          <input type="submit" class="btn btn-info " value="Login">
        </form>
      </div>

    </div>

  </div>
  @include('FrontEnd.layouts.js')
@endsection