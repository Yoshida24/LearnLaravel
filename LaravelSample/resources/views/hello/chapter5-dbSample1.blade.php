@extends('layouts.chapter')

@section('content')
  <table>
    <tr><th>id</th><th>name</th><th>mail</th><th>age</th><tr>
    {{var_dump($items)}}
    @foreach ($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
      </tr>
    @endforeach
  </table>
@endsection
