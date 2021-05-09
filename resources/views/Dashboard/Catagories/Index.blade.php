@extends('Dashboard.Layout.Layout')
@section('catagory_search')
<h2>Catagory Section</h2>
<a class="btn btn-success float-right" href="{{route('Catagory.create')}}">
Add New Catagory
</a>
<br>
<br>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Catagory-ID</th>
<th>Catagory-Title</th>
<th>Catagory-Image</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@if(!$catagories->isEmpty())
@foreach($catagories as $catagory)
<tr>
<td>
{{$catagory->catagory_id}}
</td>
<td>
{{$catagory->catagory_title}}
</td>
<td>
<img height="40" width="40" class="img-fluid img-thumbnail" src="{{asset('/Storage/Images/'.$catagory->catagory_image)}}"/>
</td>
<td>
<a class="btn btn-link" href="{{route('Catagory.show',$catagory->catagory_id)}}">
<span class="fa fa-eye">
</span>
</a></td>
<td>
<a class="btn btn-link" href="{{route('Catagory.edit',$catagory->catagory_id)}}">
<span class="fa fa-edit">
</span>
</a></td>
<form method="post" action="{{route('Catagory.destroy',$catagory->catagory_id)}}">
@csrf
@method('delete')
<td>
<button class="btn btn-link">
<span class="fa fa-trash">
</span>
</button>
</td>
</form>
</tr>
@endforeach
@else
<tr>
<td colspan="6">
<strong>
No catagory were found in database
</strong>
</td>
</tr>
@endif
</tbody>
</table>
@endsection