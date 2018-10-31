@extends('layouts.chapter')

@section('title','Chapter1')

@section('content')
Chapter1ではLaravelの導入を行った。
@endsection

{{--
  @section('content')
  <p>discription1</p>
  <p>discription2</p>
  @component('components.message')
    @slot('msg_title')
      Message01
    @endslot
    @slot('msg_content')
      Message01
    @endslot
  @endcomponent

  @include('components.message',['msg_title'=>'サブビュー','msg_content'=>'サブビューのコンテンツ'])

  @each('components.item',$item,'item')

  <p>コンポーザーのメッセージ：{{$view_message}}</p>

  <table>
    @foreach($data as $item)
    <tr>
      <td>
        {{$item['name']}}
      </td>
      <td>
        {{$item['mail']}}
      </td>
    </tr>
  </table>

@endsection
--}}
