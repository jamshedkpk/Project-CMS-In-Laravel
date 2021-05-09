@extends('Dashboard.Layout.Layout')
@section('post_search')
<h2>
Post Section
</h2>
<a class="btn btn-success float-right" href="{{route('Post.create')}}">Add New Post</a>
<br><br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-sm">
<thead>
<tr>
<th>Catagory</th>
<th>Post-Title</th>
<th>Post-Image</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@if(!$posts->isEmpty())
@foreach($posts as $post)
<tr>
<td>{{$post->catagory->catagory_title}}</td>
<td>{{$post->post_title}}</td>
<td>
<div class="img-thumbnail" style="background:#004261;">
<img src="{{asset('/Storage/Images/'.$post->post_image)}}" height="50px" width="50px" class="img-fluid" style="border-radius:2px;">
</div>
</td>
<td>
<a class="btn btn-link" href="{{route('Post.show',$post->post_id)}}">
<span class="fa fa-eye"></span>
</a>
</td>
<td>
<a class="btn btn-link" href="{{route('Post.edit',$post->post_id)}}">
<span class="fa fa-edit"></span>
</a>
</td>
<form method="post" action="{{route('Post.destroy',$post->post_id)}}">
@csrf
@method('delete')
<td>
<button class="btn btn-link">
<span class="fa fa-trash"></span>	
</button>
</td>
</form>
</tr>
@endforeach
@else
<tr>
<td colspan="5">
{{'No post were found in database'}}
</td>
</tr>
@endif
</tbody>
</table>
</div>
@endsection