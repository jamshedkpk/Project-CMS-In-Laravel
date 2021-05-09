<!--To show all Users-->
@extends('Dashboard.Layout.Layout')
@section('user_search')
<h2>Users Detail</h2>
<a class="btn btn-success float-right" href="{{route('User.create')}}">Add New User</a>
<br><br>

<div class="table-responsive">
<table class="table table-bordered table-striped table-sm">
<thead>
<tr>
<th>User-ID</th>
<th>User-Name</th>
<th>User-Email</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@if(!$users->isEmpty())
@foreach($users as $user)
<tr>
<td>{{$user->user_id}}</td>
<td>{{$user->user_name}}</td>
<td>{{$user->user_email}}</td>
<td>
<a class="btn btn-link" href="{{route('User.show',$user->user_id)}}">
<span class="fa fa-eye"></span>
</a>
</td>
<td>
<a class="btn btn-link" href="{{route('User.edit',$user->user_id)}}">
<span class="fa fa-edit"></span>
</a>
</td>
<form method="post" action="{{action('UserController@destroy',$user->user_id)}}">
@csrf
@method('delete')
<td>
<button type="submit" class="btn btn-link">
<span class="fa fa-trash"></span>
</button>
</td>
</form>
</tr>
@endforeach
@else
<tr>
<td colspan="5">
{{'No user were found in database'}}
</td>
</tr>
@endif
</tbody>
</table>
</div>
@endsection