@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md">
        <a href="{{ url('/creator/create') }}" class="btn btn-primary">Add New Creator <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name Creator</th>
              <th>E-Mail Creator</th>
              <th>Contact Creator</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            @foreach($creators as $creator)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $creator->name_creator }}</td>
              <td>{{ $creator->email }}</td>
              <td>{{ $creator->no_hp }}</td>
              <td>
                <a href="{{ route('creator.edit', $creator) }}" class="btn btn-primary btn-sm" style="float:left;">Update</a>
                <form action="{{ route('creator.destroy',$creator) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()