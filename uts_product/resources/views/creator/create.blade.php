@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="panel panel-default">
        <div class="panel-heading">Create New Creator</div>
        <div class="panel-body">
          <form action="{{ url('/creator/create') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name_creator" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <label for="">Phone Number</label>
              <input type="text" class="form-control" name="no_hp" placeholder="Enter Your Phone Number">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Address">
            </div>
            <div class="form-group">
              <input type="submit" value="Save" class="btn btn-primary">
              <a href="{{URL('/creator')}}" class="btn btn-danger">Back</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection()