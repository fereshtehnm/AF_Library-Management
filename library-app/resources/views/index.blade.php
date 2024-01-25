@extends('layouts.master')
@section('content')
@foreach($books as $book)
<div class="flex flex-wrap bg-black">
  <div class="col-md-6 col-lg-4">

    <div class="card">
    <h6 class="mt-2 text-muted">{{$book->name}}</h6>
      <img class="card-img-top" src="../../assets/img/elements/7.jpg" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">{{$book->category}}</h5>
        <p class="card-text">{{$book->description}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$book->author}}</li>
        <li class="list-group-item">{{$book->quantity}}</li>
      </ul>
      <div class="card-body">
        <a href="javascript:void(0)" class="card-link">Card link</a>
        <a href="javascript:void(0)" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection