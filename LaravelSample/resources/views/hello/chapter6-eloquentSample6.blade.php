@extends('layouts.chapter')

@section('content')
 検索ページ
 @if(isset($errors)>0)
 <div>
   <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
   </ul>
 </div>
 @endif
 <table>
  <form action = "/hello/chapter6/eloquentSample6" method ="post">
   {{csrf_field()}}
    <input type="hidden" name="id" value="{{$form->id}}">
     <tr>
       <th>
         name:
       </th>
       <td>
         <input type="text" name="name" value="{{old('name')}}">
       </td>
     </tr>
     <tr>
       <th>
         mail:
       </th>
       <td>
         <input type="text" name="mail" value="{{old('mail')}}">
       </td>
     </tr>
     <tr>
       <th>
         age:
       </th>
       <td>
         <input type="text" name="age" value="{{old('age')}}">
       </td>
     </tr>
     <tr>
       <th>
       </th>
       <td>
         <input type="submit" value="send">
       </td>
     </tr>
   </form>
 </table>
@endsection
