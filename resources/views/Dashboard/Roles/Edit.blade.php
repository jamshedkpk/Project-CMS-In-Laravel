@extends('Dashboard.Layout.Layout')
@section('role_edit')
<form method="post" action="{{route('Role.update',$role->role_id)}}">
@csrf
@method('put')
<div class="container">
<div class="row">
<div class="col-md-4 offset-4">
<div class="form-group">
<label>Role Name:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-user-md"></span>	
</span>	
</div>
<input type="text" name="role_name" class="form-control" value="{{$role->role_name}}"/>
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
<div class="col-md-4 offset-4">
<button class="btn btn-success btn-block" type="submit">
<span class="fa fa-edit"></span>
&nbsp;&nbsp;&nbsp;
Update</button>	
</div>	
</div>
</div>	
</form>
@endsection