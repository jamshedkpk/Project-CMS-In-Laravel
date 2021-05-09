@extends('Dashboard.Layout.Layout')
@section('role_show')
<h2>Role Detail</h2>
<div class="table-responsive">
<table class="table table-bordered table-striped table-sm">
<thead>
<tr>
<th>Role-ID</th>
<th>Role-Name</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{$role->role_id}}</td>
<td>{{$role->role_name}}</td>
</tr>
</tbody>
</table>
</div>
@endsection