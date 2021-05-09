@extends('Dashboard.Layout.Layout')
@section('roleuser_show')
<h2>
Role User Section
</h2>
<div class="table-responsive">
<table class="table table-bordered table-striped table-sm">
<thead>
<tr>
<th>User-Name</th>
<th>Roles</th>
</tr>
</thead>
<tbody>
<tr>
<td>
{{$user->user_name}}	
</td>
<td>
@foreach($user->roles as $role)
{{'['.$role->role_name.']'}}
@endforeach
</td>
</form>
</tr>
</tbody>
</table>
</div>
@endsection