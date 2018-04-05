@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md">
    <div class="panel panel-default">
      <div class="panel-heading">Edit product</div>
      <div class="panel-body">
        <form action="{{ route('product.update',$product) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Name Product</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{$product->title}}">
          </div>
          <div class="form-group">
            <label for="">Price Product</label>
            <input type="text" class="form-control" name="no_hp" placeholder="Enter Your Phone Number" value="{{$product->price}}">
          </div>
          <div class="form-group">
            <label for="">Creator Name</label>
            <select name="name_creator" id="" class="form-control">
              @foreach($creators as $c)
              <option value="<?=$c->id?>"><?=$c->name?></option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Categori Product</label>
            <select name="name_categori" id="" class="form-control">
              @foreach($categoris as $c1)
              <option value="<?=$c1->id?>"><?=$c1->name?></option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-primary">
            <a href="{{URL('/product')}}" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();