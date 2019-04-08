@extends('layouts.chapter')

@section('content')
  <table>
    @foreach($items as $item)
      <tr>
        <td>
          {{$item->GetData()}}
        </td>
      </tr>
    @endforeach
  </table>
@endsection
