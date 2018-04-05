@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Creator</div>
      <div class="panel-body">
        <form action="{{ route('creator.update',$creator) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name_creator" placeholder="Enter Your Name" value="{{$creator->name_creator}}">
          </div>
          <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" name="no_hp" placeholder="Enter Your Phone Number" value="{{$creator->no_hp}}">
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Address" value="{{$creator->email}}">
          </div>
          <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-primary">
            <a href="{{URL('/creator')}}" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();