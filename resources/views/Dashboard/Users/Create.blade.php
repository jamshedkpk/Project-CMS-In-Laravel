@extends('Dashboard.Layout.Layout')
@section('user_create')
<form method="post" action="{{route('User.store')}}">
@csrf
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>User Name:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-user"></span>	
</span>	
</div>
<input type="text" name="user_name" class="form-control" value="{{old('user_name')}}"/>	
</div>	
<strong class="text-danger">
@if($errors->has('user_name'))
@foreach($errors->get('user_name') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>User Email :</label>	
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-comments"></span	
>	
</div>	
<input type="text" name="user_email" class="form-control" value="{{old('user_email')}}" />
</div>
<strong class="text-danger">
@if($errors->has('user_email'))
@foreach($errors->get('user_email') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>User Password:</label>	
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-globe"></span>	
</span>	
</div>
<input type="text" name="user_password" class="form-control" value="{{old('user_password')}}" />	
</div>
<strong class="text-danger">
@if($errors->has('user_password'))
@foreach($errors->get('user_password') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>	
<div class="col-md-6">
<button class="btn btn-success btn-block" style="margin-top:32px;">Register</button>	
</div>	
</div>
</div>
</form>
@endsection