@extends('master')

@section('content')
<form method="post" action="/pertanyaan" >
@csrf

<label>Id </label>
<input type="text" name="id_tanya" class="form-control" />
<br />
<label>Judul</label>
<input type="text" name="judul"  class="form-control"/>
<br />
<label>isi </label>
<input type="text" name="isi" class="form-control" />
<br />


<input type="submit" value="Submit" class="btn btn-primary my-1" />
</form>
@endsection