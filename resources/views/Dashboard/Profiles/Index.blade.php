@extends('Dashboard.Layout.Layout')
@section('profile_search')
<h2>
User Profile Section
</h2>
<a href="{{route('Profile.create')}}" class="btn btn-dark float-right">
Add New Profile
</a>
<br>
<br>
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Name</th>
<th>Country</th>
<th>Image</th>
<th>Mobile No</th>
<th>CNIC No</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@if(!$profiles->isEmpty())
@foreach($profiles as $profile)
<tr>
<td>
{{$profile->user->user_name ?? ''}}
</td>
<td>
{{$profile->profile_country}}	
</td>
<td>
<img class="img-fluid img-thumbnail" height="40px" width="40px" src="{{asset('Storage/Images/'.$profile->profile_image)}}" alt="None">	
</td>
<td>
{{$profile->profile_mobileno}}	
</td>
<td>
{{$profile->profile_cnicno}}	
</td>
<td>
<a href="{{route('Profile.show',$profile->profile_id)}}" class="btn btn-link">
<span class="fa fa-eye"></span>	
</a>	
</td>
<td>
<a class="btn btn-link" href="{{route('Profile.edit',$profile->profile_id)}}">
<span class="fa fa-edit"></span>	
</a>	
</td>
<form method="post" action="{{route('Profile.destroy',$profile->profile_id)}}">
@csrf
@method('delete')
<td>
<button class="btn btn-link">
<span class="fa fa-trash"></span>	
</button>	
</form>
</td>
</tr>
@endforeach
@else
<tr>
<td colspan="6">
No profile were found in database
</td>
</tr>
@endif
</tbody>
</table>
@endsection