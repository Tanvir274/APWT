@extends('layouts.app')
@section('product')
<form action="{{route('product.submit')}}" class="col-md-6" method="post">

{{csrf_field()}}

      <div class="col-md-4 from group">
          <span>ID</span><br>
          <input type="number" name="id" value="{{old('id')}}" class="from-control"><br>
          @error('id')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Name</span><br>
          <input type="text" name="name" value="{{old('name')}}" class="from-control"><br>
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Price</span><br>
          <input type="number" name="price" value="{{old('price')}}" class="from-control"><br>
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Quantity</span><br>
          <input type="number" name="quantity" value="{{old('quantity')}}" class="from-control"><br>
          @error('quantity')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="col-md-4 from group">
          <span>Description</span><br>
          <input type="text" name="description" value="{{old('description')}}" class="from-control"><br>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <input type="submit" class="btn btn-success" value="submit">

  </form>
@endsection