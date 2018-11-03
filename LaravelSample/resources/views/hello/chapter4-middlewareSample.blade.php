@extends('layouts.chapter')

@section('content')
  <div>
    @foreach($data as $item)
      {{$item['name']}},{{$item['mail']}}<br>
    @endforeach
  </div>

  <div>
    <middleware>google.com</middleware>
    <middleware>yahoo.co.jp</middleware>
  </div>
@endsection
