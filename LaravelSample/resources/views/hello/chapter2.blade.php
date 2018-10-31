@extends('layouts.chapter')

@section('title','Chapter2')

@section('content')
  <div>
    ルーティングについて
  </div>
  <div>
    <ol>
      <li><a href="chapter2/returnhtml">直接htmlを返すルーティング</a></li>
      <li><a href="chapter2/routeParameter/given parameter is displayed.">ルートパラメータの利用</a></li>
      <li><a href="chapter2/multiparam/TEST_MESSAGE_1.">コントローラからのルートパラメータの利用</a></li>
      <li><a href="chapter2/requestsample">リクエストとレスポンス</a></li>
    </ol>
  </div>
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
