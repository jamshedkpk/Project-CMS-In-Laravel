@extends('Dashboard.Layout.Layout')
@section('profile_create')
<form method="post" action="{{route('Profile.store')}}" enctype="multipart/form-data">
@csrf
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Select A User:</label>	
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-user"></span>	
</span>	
</div>
<select class="form-control" name="user_id">
@foreach($users as $user)
<option value="{{$user->user_id}}">
{{$user->user_name}}
</option>
@endforeach	
</select>
</div>
</div>	
</div><div class="col-md-4">
<div class="form-group">
<label>Select A Country:</label>	
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-globe"></span>	
</span>	
</div>
<select name="profile_country" class="form-control">
<option>Pakistan</option>
<option>Turkey</option>
<option>Japan</option>
</select>
</div>
</div>	
</div>
<div class="col-md-4">
<div class="form-group">
<label>Select Profile Image:</label>
<input type="file" name="profile_image" class="form-control form-control-file" value="{{old('profile_image')}}">
<strong class="text-danger">
@if($errors->has('profile_image'))
@foreach($errors->get('profile_image') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Mobile No</label>	
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-mobile">	
</span>	
</span>	
</div>		
<input type="text" name="profile_mobileno" class="form-control" value="{{old('profile_mobileno')}}">
<strong class="text-danger">
@if($errors->has('profile_mobileno'))
@foreach($errors->get('profile_mobileno') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
</div>	
</div>		
<div class="col-md-4">
<div class="form-group">
<label>CNIC No</label>	
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fab fa-cc-discover">	
</span>	
</span>	
</div>		
<input type="text" name="profile_cnicno" class="form-control" value="{{old('profile_cnicno')}}">
<strong class="text-danger">
@if($errors->has('profile_cnicno'))
@foreach($errors->get('profile_cnicno') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
</div>	
</div>
<div class="col-md-4">
<button class="btn btn-success btn-block" style="margin-top:33px;">
<span class="fa fa-plus"></span>	
&nbsp;&nbsp;&nbsp;
Add Profile
</button>	
</div>		
</div>
</div>
</form>
@endsection