<?php
namespace App\Http\Controllers;
use App\User;
use App\Profile;
use App\Http\Requests\Validation_Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
public function index()
{
$profiles=Profile::with('user')->get();
return view('Dashboard.Profiles.Index',compact('profiles'));
}

public function create()
{
$users=User::all();
return view('Dashboard.Profiles.create',compact('users'));
}

public function store(Validation_Profile $request)
{
$profile=new Profile();
$profile->user_id=$request->user_id;
$profile->profile_country=$request->profile_country;
$extension=explode('.',$request->profile_image);
$extension=end($extension);
$filename=sprintf('Image_%s.jpg',random_int(1,100));
$profile->profile_mobileno=$request->profile_mobileno;
$profile->profile_cnicno=$request->profile_cnicno;
if($request->hasFile('profile_image'))
{
$request->file('profile_image')->storeAs('Images',$filename,'public');
$profile->profile_image=$filename;
}
$result=$profile->save();

if($result)
{
return redirect()->route('Profile.index');	
}
}

public function show($profile)
{
$profile=Profile::find($profile);
return view('Dashboard.Profiles.Show',compact('profile'));
}
public function edit($profile)
{
$profile=Profile::find($profile);
return view('Dashboard.Profiles.Edit',compact('profile'));
}
public function update(Validation_Profile $request, $profile)
{
$profile=Profile::find($profile);
$profile->profile_country=$request->profile_country;
$profile->profile_mobileno=$request->profile_mobileno;
$profile->profile_cnicno=$request->profile_cnicno;
$filename=sprintf('Image_%s.jpg',random_int(1,100));
if($request->hasFile('profile_image'))
{
$request->file('profile_image')->storeAs('Images',$filename,'public');
$profile->profile_image=$filename;
}
$result=$profile->update();
if($result)
{
return redirect()->route('Profile.index');	
}
}

public function destroy($profile)
{
$profile=Profile::find($profile);
$result=$profile->delete();
if($result)
{
return redirect()->route('Profile.index');	
}
}
}
