@extends('layouts.app')
@section('content')

@if(Session::has('cart'))
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <ul class="list-group">
        <li class="list-group-item">
          @isset($items)
            @foreach($items as $item)
              <li class="list-group-item">
                <strong>{{$item['item']['name']}}</strong>
                <span class="label label-success">{{$item['price']}}</span>
              </li>
            @endforeach
          @endisset
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <strong>Total: {{$totalPrice}}</strong>
    </div>
  </div>
@else
@endif

@endsection