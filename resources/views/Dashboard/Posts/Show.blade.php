@extends('Dashboard.Layout.Layout')
@section('post_show')
<div class="container">
<div class="row">
<div class="col-md-6">
<label>
Catagory : {{$post->catagory->catagory_title}}
</label>
<br>
<label>
Post Title : {{$post->post_title}}
</label>
<hr>
<p>
{!!$post->post_content!!}
</p></div>
<div class="col-md-6">
<div class="img-thumbnail float-right">
<img src="{{asset('/Storage/Images/'.$post->post_image)}}" class="img-fluid" height="300px" width="300px">		
</div>	
</div>	
</div>
</div>
@endsection