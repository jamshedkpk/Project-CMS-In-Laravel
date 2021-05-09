@extends('Dashboard.Layout.Layout')
@section('user_show')
<div class="table-responsive">
<table class="table table-bordered table-striped table-sm">
<thead>
<tr>
<th>User-ID</th>
<th>User-Name</th>
<th>User-Email</th>
</tr>
</thead>
<tbody>
<tr>
@isset($user)	
<td>
{{$user['user_id']}}</td>
<td>{{$user['user_name']}}</td>
<td>{{$user['user_email']}}</td>
@endif
</tr>
</tbody>
</table>
</div>
@endsection