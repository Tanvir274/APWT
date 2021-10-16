@extends('layouts.app')
@section('product')
<form action="{{route('product.resubmit')}}" class="col-md-6" method="post">

{{csrf_field()}}
      <input type="hidden" name="primary_id" value="{{$ProductEdit->id}}" class="from-control"><br>
      <div class="col-md-4 from group">
          <span>ID</span><br>
          <input type="number" name="id" value="{{$ProductEdit->p_id}}" class="from-control"><br>
          @error('id')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Name</span><br>
          <input type="text" name="name" value="{{$ProductEdit->name}}" class="from-control"><br>
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Price</span><br>
          <input type="number" name="price" value="{{$ProductEdit->price}}" class="from-control"><br>
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Quantity</span><br>
          <input type="number" name="quantity" value="{{$ProductEdit->quantity}}" class="from-control"><br>
          @error('quantity')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Description</span><br>
          <input type="text" name="description" value="{{$ProductEdit->description}}" class="from-control"><br>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <input type="submit" class="btn btn-success" value="confirm">

  </form>
@endsection