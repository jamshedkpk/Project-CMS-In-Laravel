@extends('Dashboard.Layout.Layout')
@section('roleuser_create')
<form method="post" action="{{route('RoleUser.store')}}">
@csrf
<div class="container">
<div class="row">
<div class="col-md-4 offset-4">
<label>User :</label>
<select class="form-control" name="user_id">
@foreach($users as $user)
<option value="{{$user->user_id}}">
{{$user->user_name}}
</option>
@endforeach
</select>
<label>Role:</label>
<select class="form-control" name="role_id">
@foreach($roles as $role)
<option value="{{$role->role_id}}">
{{$role->role_name}}
</option>
@endforeach
</select>
<br>
<button class="btn btn-success btn btn-block">
&nbsp;&nbsp;&nbsp;
<span class="fa fa-plus"></span>
Add
</button>
</div>	
</div>
</div>	
</form>
@endsection