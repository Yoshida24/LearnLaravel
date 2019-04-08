<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request)
    {
      $items = Board::all();
      return view('hello.chapter6-eloquentSample8',['items'=>$items]);
    }

    public function add(Request $request){
      return view('hello.chapter6-eloquentSample9',['input'=>'']);
    }

    public function create(Request $request){
      $this->validate($request,Board::$rules);
      $person = new Board;
      $form = $request->all();
      unset($form['_token']);
      $person->fill($form)->save();
      return redirect('/hello/chapter6/eloquentSample8');
    }
}
