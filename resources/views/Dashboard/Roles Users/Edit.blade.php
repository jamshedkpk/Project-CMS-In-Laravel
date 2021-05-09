@extends('Dashboard.Layout.Layout')
@section('roleuser_edit')
@foreach($user->roles as $role)
<form method="post" action="{{route('RoleUser.update',$user->user_id)}}">
<input type="hidden" value="{{$role->role_id}}" name="old_role">
@csrf	
@method('PUT')
<h4>
<center>
Role Of {{$user->user_name}}
</h4>
</center>
<table class="table table-bordered table-hover table-striped">
<thead>
<tr>
<th>Name</th>
<th>New Role</th>
<th>Update</th>
</tr>
</thead>
<tbody>
<tr>
<td>
{{$role->role_name}}
</td>
<td>
<select name="new_role" class="form-control form-control-sm">
@foreach($roles as $role)
<option value="{{$role->role_id}}">
{{$role->role_name}}
</option>
@endforeach
</select>
</td>
<td>
<button type="submit" class="btn btn-link">	
<span class="fa fa-edit">	
</span>
</button>
</form>
</td>
</tr>
</tbody>
</table>
</form>
@endforeach
@endsection