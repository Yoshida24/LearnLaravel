@extends('layouts.chapter')

@section('content')
<table>
  {{var_dump($items)}}
  @foreach ($items as $item)
    <tr>
      <td>{{$item->getData()}}</td>
    </tr>
  @endforeach
</table>
  <table>
    {{var_dump($items)}}
    @foreach ($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
        <td>
          @if($item->boards!=null)
            @foreach($item->boards as $obj)
              {{$obj->getData()}}<br>
            @endforeach
          @endif
        </td>
      </tr>
    @endforeach
  </table>
@endsection
