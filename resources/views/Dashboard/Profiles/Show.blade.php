@extends('Dashboard.Layout.Layout')
@section('profile_show')
<h2>
User Profile Section
</h2>
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Name</th>
<th>Country</th>
<th>Image</th>
<th>Mobile No</th>
<th>CNIC No</th>
</tr>
</thead>
<tbody>
<tr>
<td>
{{$profile->user->user_name}}
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
</tbody>
</table>
@endsection