@extends('Dashboard.Layout.Layout')
@section('role_search')
<h2>
Role Section
</h2>
<a class="btn btn-success float-right" href="{{route('Role.create')}}">Add New Role</a>
<br><br>

<div class="table-responsive">
<table class="table table-bordered table-striped table-sm">
<thead>
<tr>
<th>Role-ID</th>
<th>Role-Name</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@if(!$roles->isEmpty())
@foreach($roles as $role)
<tr>
<td>{{$role->role_id}}</td>
<td>{{$role->role_name}}</td>
<td>
<a class="btn btn-link" href="{{route('Role.show',$role->role_id)}}">
<span class="fa fa-eye"></span>
</a>
</td>
<td>
<a class="btn btn-link" href="{{route('Role.edit',$role->role_id)}}">
<span class="fa fa-edit"></span>
</a>
</td>
<form method="post" action="{{route('Role.destroy',$role->role_id)}}">
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