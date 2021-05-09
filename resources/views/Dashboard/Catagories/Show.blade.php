@extends('Dashboard.Layout.Layout')
@section('catagory_show')
<h2>Catagory Detail</h2>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Catagory-ID</th>
<th>Catagory-Title</th>
<th>Catagory-Image</th>
</tr>
</thead>
<tbody>
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
</tr>
</tbody>
</table>
@endsection
