
@extends('master')

@section('content')

<form method="post" action="/pertanyaan/{{$items->id_tanya}}" >
@csrf
@method('PUT')
<label>Id </label>
<input type="text" name="id_tanya" value="{{$items->id_tanya}}" class="form-control" />
<br />
<label>Judul</label>
<input type="text" name="judul" value="{{$items->judul}}" class="form-control"/>
<br />
<label>isi </label>
<input type="text" name="isi" value="{{$items->isi}}" class="form-control" />
<br />


<input type="submit" value="Update" class="btn btn-primary my-1" />
</form>


@endsection

