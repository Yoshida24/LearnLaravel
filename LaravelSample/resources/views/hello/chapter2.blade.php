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
