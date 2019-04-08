<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /* Section6 */
    public function eloquentSample1(Request $request){
      $items = Person::all();
      return view('hello.chapter6-eloquentSample1',['items'=>$items]);
    }

    public function eloquentSample2(Request $request){
      $items = Person::all();
      return view('hello.chapter6-eloquentSample2',['items'=>$items]);
    }

    public function eloquentSample3(Request $request){
      $item = Person::find(2);
      return view('hello.chapter6-eloquentSample3',['item'=>$item]);
    }

    public function add(Request $request){
      return view('hello.chapter6-eloquentSample5',['input'=>'']);
    }

    public function create(Request $request){
      $this->validate($request,Person::$rules);
      $person = new Person;
      $form = $request->all();
      unset($form['_token']);
      $person->fill($form)->save();
      return redirect('/hello/chapter6/eloquentSample1');
    }

    public function search(Request $request)
    {
      //$min = $request->input * 1;
      //$max = $request->input + 10;
      $items = Person::all();
      //$item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
      $param = ['input'=>$request->input,'items'=>$items];
      return view('hello.chapter6-eloquentSample4',$param);
    }

    public function find(Request $request)
    {
      return view('hello.chapter6-eloquentSample4',['input'=>'']);
    }

    public function edit(Request $request)
    {
      $person = Person::find($request->id);
      return view('hello.chapter6-eloquentSample6', ['form'=>$person]);
    }

    public function update(Request $request)
    {
      $this->validate($request,Person::$rules);
      $person = Person::find($request->id);
      $form = $request->all();
      unset($form['_token']);
      $person->fill($form)->save();
      return redirect('/hello/chapter6/eloquentSample1');
    }

    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('hello.chapter6-eloquentSample7', ['form'=>$person]);
    }

    public function remove(Request $request) {
      Person::find($request->id)->delete();
      return redirect('/hello/chapter6/eloquentSample1');
    }
}
