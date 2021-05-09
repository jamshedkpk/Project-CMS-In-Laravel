<?php
namespace App\Http\Controllers;
use App\Catagory;
use App\Post;
use App\Http\Requests\Validation_Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
public function index()
{
$catagories=Catagory::all();
return view('Dashboard.Catagories.index',compact('catagories'));
}

public function create()
{
return view('Dashboard.Catagories.Create');
}
public function store(Validation_Catagory $request)
{
$catagory=new Catagory();
$catagory->catagory_title=$request->catagory_title;
// To make a random file name
$filename=sprintf("Image_%s.jpg",random_int(1,1000));
if($request->hasFile('catagory_image'))
{
// To store in folder 
$request->file('catagory_image')->storeAs('images',$filename,'public');
// To store in database
$catagory->catagory_image=$filename;
}
$save=$catagory->save();
if($save)
{
return redirect()->route('Catagory.index');	
}
}
public function show($catagory)
{
$catagory=Catagory::find($catagory);
return view('Dashboard.Catagories.Show',compact('catagory'));
}
public function edit($catagory)
{
$catagory=Catagory::find($catagory);
return view('Dashboard.Catagories.Edit',compact('catagory'));
}
public function update(Validation_Catagory $request,$catagory)
{
$catagory=Catagory::find($catagory);
$catagory->catagory_title=$request->catagory_title;
$filename=sprintf("Image_%s.jpg",'_Catagory');
if($request->hasFile('catagory_image'))
{
$request->file('catagory_image')->storeAs('Images',$filename,'public');
$catagory->catagory_image=$filename;
$catagory->update();
}
$result=$catagory->update();
if($result)
{
return redirect()->route('Catagory.index');	
}
}
public function destroy($catagory)
{
$catagory=Catagory::find($catagory);
$cid=$catagory->catagory_id;
$posts=Post::where(['catagory_id'=>$cid]);
$result1=$catagory->delete();
$result2=$posts->delete();
if(($result1)&&($result2))
{
return redirect()->route('Catagory.index');	 
}
else
{
return redirect()->route('Catagory.index');	 	
}
}
}
