<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  public function index()
  {
      //$html = '<html><body><p>これは追加されたアクションです。</p></body></html>';
      $html = <<<EOF
      <html><body>
        <p>index</p>
        <a href="hello/chapter1">Chapter1</a><br>
        <a href="hello/chapter2">Chapter2</a><br>
        <a href="hello/chapter3">Chapter3</a><br>
        <a href="hello/chapter4">Chapter4</a><br>
        <a href="hello/chapter5">Chapter5</a><br>
        <a href="hello/chapter6">Chapter6</a><br>
        <a href="hello/chapter7">Chapter7</a><br>
      </body></html>
EOF;
      return $html;
  }

  public function chapter1(){
    return view('hello.chapter1');
  }

  public function chapter2(){
    return view('hello.chapter2');
  }

  public function chapter3(){
    return view('hello.chapter3');
  }

  public function chapter4(){
    return view('hello.chapter4');
  }

  public function chapter5(){
    return view('hello.chapter5');
  }

  public function chapter6(){
    return view('hello.chapter6');
  }

  public function chapter7(){
    return view('hello.chapter7');
  }

  /* Section2 */
  public function hellowithparam($param1,$param2='defaultvalue')
  {
      $html = <<<EOF
        <html>
          <body>
            <p>param1:{$param1}</p>
            <p>param2:{$param2}</p>
          </body>
        </html>
EOF;
      return $html;
  }

  /* Section2 */
  public function requestSample(Request $request,Response $response){
    $html = <<<EOF
      <html>
        <body>
          <p>request</p>
          <pre>{$request}</pre>
          <p>response</p>
          <pre>{$response}</pre>
        </body>
      </html>
EOF;
    $response->setContent($html);
    return $html;
  }

  /* Section3 */
  public function templateSample(){
    $data = [
      'item'=>[
        ['msg'=>'テストメッセージ01','discription'=>'ディスクリプション01'],
        ['msg'=>'テストメッセージ02','discription'=>'ディスクリプション02'],
        ['msg'=>'テストメッセージ03','discription'=>'ディスクリプション03']
      ],
      'message'=>'上書きされるべきメッセージ'
    ];
    return view('hello.index',$data);
  }

  /* Section3 */
  public function queryStringSample(Request $request){
    $data = ['msg'=>$request->msg];
    return view('hello.index',$data);
  }

  /* Section3 */
  public function formSample1(){
    $data = [
      'msg'=>'名前を入れてください',
      'numbers'=>['one','two','three'],
    ];
    return view('hello.index',$data);
  }

  /* Section3 */
  public function formSample2(Request $request){
    $data = ['msg'=>$request->msg];
    return view('hello.index',$data);
  }
}
