@extends('layouts.chapter')

@section('content')
 削除ページ
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
  <form action = "/hello/chapter6/eloquentSample9" method ="post">
   {{csrf_field()}}
   <tr>
     <th>
       person_id:
     </th>
     <td>
       <input type="number" name="person_id">
     </td>
   </tr>
   <tr>
     <th>
       title:
     </th>
     <td>
       <input type="text" name="title">
     </td>
   </tr>
     <tr>
       <th>
         message:
       </th>
       <td>
         <input type="text" name="message">
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
