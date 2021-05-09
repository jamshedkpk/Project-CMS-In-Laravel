@extends('Dashboard.Layout.Layout')
@section('role_create')
<form method="post" action="{{route('Role.store')}}">
@csrf
<div class="container">
<div class="row">
<div class="col-md-4 offset-4">
<div class="form-group">
<label for="role_name">
Role Name:</label>	
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-user-md">
</span>	
</span>	
</div>
<input name="role_name" id="role_name" type="text" name="role_name" class="form-control" value="{{old('role_name')}}"/>
</div>
<strong class="text-danger">
@if($errors->has('role_name'))
@foreach($errors->get('role_name') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>			
</div>
<div class="row">
<div class="col-md-4 offset-4">
<button class="btn btn-success btn-block" type="submit">
<span class="fa fa-plus"></span>
&nbsp;&nbsp;&nbsp;
Add
</button>	
</div>
</div>
</div>
</form>
@endsection