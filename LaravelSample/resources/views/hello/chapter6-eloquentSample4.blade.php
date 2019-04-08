@extends('layouts.chapter')

@section('content')
 検索ページ
 <form action = "/hello/chapter6/eloquentSample4" method ="post">
   {{csrf_field()}}
   <input type="text" name="input" value="{{$input}}">
   <input type="submit" value="find">
 </form>
  @if(isset($items))
 {{var_dump($items)}}
  <table>
    @foreach($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
      </tr>
    @endforeach
  </table>
  @else
  結果なし
  @endif
@endsection
