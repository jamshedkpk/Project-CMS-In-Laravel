<?php
namespace App\Http\Controllers;
use App\Post;
use App\Catagory;
use App\Http\Requests\Validation_Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index()
{
$posts=Post::all();
 return view('Dashboard.Posts.Index',compact('posts'));
}
public function create()
{
$catagories=Catagory::all();
return view('Dashboard.Posts.Create',compact('catagories'));
}
public function store(Validation_Post $request)
{
$post=new Post();
$catagory_id=$request->catagory_id;
$post_title=$request->post_title;
$post_content=$request->post_content;
$filename=sprintf('Image_%s.jpg',random_int(1,1000));
if($request->hasFile('post_image'))
{
$request->file('post_image')->storeAs('Images',$filename,'public');	
$post->catagory_id=$catagory_id;
$post->post_title=$post_title;
$post->post_content=$post_content;
$post->post_image=$filename;
$save=$post->save();
if($save)
{
return redirect()->route('Post.index');	
}
}
}
public function show($post)
{
$post=Post::find($post);
return view('Dashboard.Posts.Show',compact('post'));
}
public function edit($post)
{
$catagories=Catagory::all();
$posts=Post::all();
return view('Dashboard.Posts.Edit',compact(['posts','catagories']));
}
public function update(Validation_Post $request,$post)
{
$obj=Post::find($post);
$catagory_id=$request->catagory_id;
$post_title=$request->post_title;
$post_content=$request->post_content;
$filename=sprintf('Image_%s.jpg','_Post');
if($request->hasFile('post_image'))
{
$request->file('post_image')->storeAs('Images',$filename,'public');
$obj->catagory_id=$catagory_id;
$obj->post_title=$post_title;
$obj->post_content=$post_content;
$obj->post_image=$filename;
$update=$obj->update();
if($update)
{
return redirect()->route('Post.index');	
}
else
{
$obj->catagory_id=$catagory_id;
$obj->post_title=$post_title;
$obj->post_content=$post_content;
$update=$obj->update();
return redirect()->route('Post.index');	
}
}
}
public function destroy($post)
{
$post=Post::find($post);
$delete=$post->delete();
if($delete)
{
return redirect()->route('Post.index');	
}
}
}
