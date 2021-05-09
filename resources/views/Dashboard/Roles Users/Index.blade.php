@extends('Dashboard.Layout.Layout')
@section('roleuser_search')
<h2>
Role User Section
</h2>
<a class="btn btn-success float-right" href="{{route('RoleUser.create')}}">Add New Role To User</a>
<br><br>

<div class="table-responsive">
<table class="table table-bordered table-striped table-sm">
<thead>
<tr>
<th>User-Name</th>
<th>Roles</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@if(!$users->isEmpty())
@foreach($users as $user)
<tr>
<td>
{{$user->user_name}}
</td>
<td>
@foreach($user->roles as $role)
{{'['.$role->role_name.']'}}
@endforeach
</td>
<td>
<a class="btn btn-link" href="{{route('RoleUser.show',$user->user_id)}}">
<span class="fa fa-eye"></span>
</a>
</td>
<td>
<a class="btn btn-link" href="{{route('RoleUser.edit',$user->user_id)}}">
<span class="fa fa-edit"></span>
</a>
</td>
<form method="post" action="{{route('RoleUser.destroy',$user->user_id)}}">
@csrf
@method('delete')
<td>
<button class="btn btn-link">
<span class="fa fa-trash"></span>	
</button>
</td>
</form>
</tr>
@endforeach
@else
<tr>
<td colspan="5">
{{'No role were found in database'}}
</td>
</tr>
@endif
</tbody>
</table>
</div>
@endsection