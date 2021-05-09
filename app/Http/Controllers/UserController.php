<?php
namespace App\Http\Controllers;
use App\User;
use App\Profile;
use DB;
use App\Http\Requests\Validation_User;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function index()
{
$users=User::all();
return view('Dashboard.Users.Index',compact('users')); 
}
public function create()
{
return view('Dashboard.Users.Create');
}
public function store(Validation_User $request)
{
$user_name=$request->user_name;
$user_email=$request->user_email;
$user_password=$request->user_password;
$obj=new User();
$obj->user_name=$user_name;
$obj->user_password=$user_password;
$obj->user_email=$user_email;
$result=$obj->save();
if($result)
{
return redirect()->route('User.index');	
}
}
public function show($user)
{
$user=User::find($user);
return view('Dashboard.Users.Show',compact('user'));	
}
public function edit($user)
{
$user=User::find($user);
return view('Dashboard.Users.Edit',compact('user'));
}
public function update(Validation_User $request,$user)
{
$user=User::find($user);
$user->user_name=$request->user_name;
$user->user_email=$request->user_email;
$user->user_password=$request->user_password;
$update=$user->save();
if($update)
{
return redirect()->route('User.index');	
}
}
public function destroy($user)
{
$user=User::find($user);
// To delete user profile when user is deleted
$profile=Profile::where(['user_id'=>$user->user_id]);
$profile->delete();
$user->delete();
return redirect()->route("User.index");
}
}
