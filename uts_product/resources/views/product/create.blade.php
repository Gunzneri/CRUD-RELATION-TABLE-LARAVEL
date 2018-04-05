@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="panel panel-default">
        <div class="panel-heading">Add New Product</div>
        <div class="panel-body">
          <form action="{{ url('/product/create') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="">Name Product</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Name Product">
            </div>
            <div class="form-group">
              <label for="">Price Product</label>
              <input type="text" class="form-control" name="price" placeholder="Enter Product Price">
            </div>
            <div class="form-group">
              <label for="">Creator Name</label>
              <select name="creator_id" id="" class="form-control">
                @foreach($creators as $c)
                <option value="<?=$c->id?>"><?=$c->name_creator?></option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Categori Product</label>
              <select name="categori_id" id="" class="form-control">
                @foreach($categoris as $c1)
                <option value="<?=$c1->id?>"><?=$c1->name?></option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
            <a href="{{URL('/product')}}" class="btn btn-danger">Back</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endsection()