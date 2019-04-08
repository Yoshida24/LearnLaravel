@extends('layouts.chapter')

@section('content')
  <table>
    {{var_dump($item)}}
      <tr>
        <td>{{$item->id}}</td>
      </tr>
  </table>
@endsection
