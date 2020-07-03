@extends('master')

@section('content')
<form method="post" action="/jawaban" >
@csrf
<h2>Pertanyaan : {{$items->isi}}</h2>
<label>Id </label>
<input type="text" name="id_tanya" value="{{$items->id_tanya}}" class="form-control" />
<br />
<label>jawaban</label>
<input type="text" name="judul"  class="form-control"/>
<br />



<input type="submit" value="Submit" class="btn btn-primary my-1" />
</form>
@endsection