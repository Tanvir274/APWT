@extends('layouts.app')
@section('product')
  <table class="table table-borded">
      <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Price</td>
          <td>Change</td>
      </tr>
      @foreach($products as $p)
      <tr>
          <td>{{$p->id}}</td>
          <td>{{$p->name}}</td>
          <td>{{$p->price}}</td>
          <td><a href="/edit/{{$p->id}}">Edit</td>
      </tr>   
      @endforeach

  </table>
@endsection