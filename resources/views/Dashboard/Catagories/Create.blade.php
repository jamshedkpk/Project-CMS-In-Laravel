@extends('Dashboard.Layout.Layout')
@section('catagory_create')
<form method="post" action="{{route('Catagory.store')}}" enctype="multipart/form-data">
@csrf
<div class="container">
<div class="row">
<div class="col-md-4 offset-4">
<div class="form-group">
<label>Catagory Title:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-book"></span>	
</span>	
</div>
<input type="text" name="catagory_title" class="form-control" name="catagory_title" value="{{old('catagory_title')}}"/>
</div>
<strong class="text-danger">
@if($errors->has('catagory_title'))
@foreach($errors->get('catagory_title') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-4 offset-4">
<div class="form-group">
<label>Catagory Image:</label>
<input type="file" name="catagory_image" class="form-control form-file-control" name="catagory_image" value="{{old('catagory_image')}}"/>
<strong class="text-danger">
	@if($errors->has('catagory_image'))
@foreach($errors->get('catagory_image') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
</div>
</div>
<div class="col-md-4 offset-4">
<button type="submit" class="btn btn-success btn-block">
<span class="fa fa-plus"></span>	
</button>	
</div>
</div>
</form>
@endsection