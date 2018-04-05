@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md">
        <a href="{{ url('/categori/create') }}" class="btn btn-primary">Add New categori <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name Categori</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categoris as $categori)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $categori->name }}</td>
              <td>
                <a href="{{ route('categori.edit', $categori) }}" class="btn btn-primary btn-sm" style="float:left;">Update</a>
                <form action="{{ route('categori.destroy',$categori) }}" method="post">
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