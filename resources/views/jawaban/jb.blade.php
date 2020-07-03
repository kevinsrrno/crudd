
@extends('master')

@section('content')


<table class="table">
  <tr>
    <th scope="col">id_tanya</th>
    <th scope="col">jawaban</th>
    <th scope="col">tgl buat </th>
    <th scope="col">tgl diperbahrui </th>
  </tr>
  @foreach($items as $key => $item)
 <tr>
 <td>{{$item -> id_jb }}</td>
 <td>{{$item->isi}}</td>
 <td>{{$item -> tanggal_dibuat}}</td>
 <td>{{$item -> tanggal_diperbahrui}}</td>
  <td>
<a href="/jawaban/{{$item->id_jb}}" class="btn btn-sm btn-info">show</a>
  </td>
 </tr>
 @endforeach
</table>

@endsection

