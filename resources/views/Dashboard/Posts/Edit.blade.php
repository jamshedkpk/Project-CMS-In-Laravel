@extends('Dashboard.Layout.Layout')
@section('post_edit')
@foreach($posts as $post)
<form method="post" action="{{route('Post.update',$post->post_id)}}" enctype="multipart/form-data"> 
@csrf
@method('PUT')
<div class="container" style="padding:20px;">
<div class="row">
<div class="col-md-6">
<label>Select A Catagory:</label>
<select class="form-control" name="catagory_id">
@foreach($catagories as $catagory)
<option value="{{$catagory->catagory_id}}">
{{$catagory->catagory_title}}
</option>
@endforeach
</select> 
<strong class="text-danger">
@if($errors->has('catagory_id'))
@foreach($errors->get('catagory_id') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>   
<div class="col-md-6">
<div class="form-group">
<label>Post Title:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<span class="fa fa-book"></span> 
</span>  
</div>
<input type="text" class="form-control" name="post_title" value="{{$post->post_title}}">
</div>
<strong class="text-danger">
@if($errors->has('post_title'))
@foreach($errors->get('post_title') as $error)
{{$error}}
@endforeach
@endif 
</strong>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<textarea id="editor" name="post_content">
{{$post->post_content}}
</textarea>
<strong class="text-danger">
@if($errors->has('post_content'))
@foreach($errors->get('post_content') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>   
</div>
<br>
<div class="row">
<div class="col-md-6">
<input type="file" class="custom-file" name="post_image" >
<strong class="text-danger">
@if($errors->has('post_image'))
@foreach($errors->get('post_image') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
<div class="col-md-6">
<button class="btn btn-success btn-block">
&nbsp;
<span class="fa fa-edit"></span>
Update Post  
</button>  
</div>
</div>
</div>
</form>
@endforeach
@endsection