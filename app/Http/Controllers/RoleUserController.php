<?php
namespace App\Http\Controllers;
use App\RoleUser;
use App\User;
use DB;
use App\Role;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
public function index()
{
$users=User::all();
return view('Dashboard.Roles Users.Index',compact('users'));
}

public function create()
{
$users=User::all();
$roles=Role::all();
return view('Dashboard.Roles Users.Create',compact('users','roles'));
}
public function store(Request $request)
{
$user_id=$request->user_id;
$role_id=$request->role_id;
// To check if role is already assigned
$count=RoleUser::where(['user_id'=>$user_id,'role_id'=>$role_id])->exists();
if($count)
{
return redirect()->route('RoleUser.index');
}
else
{
$obj=new RoleUser();
$obj->user_id=$user_id;
$obj->role_id=$role_id;
$save=$obj->save();
if($save)
{
return redirect()->route('RoleUser.index');
}
}

}

public function show($roleUser)
{
$user=User::find($roleUser);
return view('Dashboard.Roles Users.Show',compact('user'));
}
public function edit($roleUser)
{
$user=User::find($roleUser);
$roles=Role::all();
return view('Dashboard.Roles Users.Edit',compact(['user','roles']));
}
public function update(Request $request,  $roleUser)
{
$user_id=$roleUser;
$old_role=$request->old_role;
$new_role=$request->new_role;
$role=RoleUser::where(['user_id'=>$user_id,'role_id'=>$old_role]);
// To check if role is already assigned
$count=RoleUser::where(['user_id'=>$user_id,'role_id'=>$new_role])->exists();
if(!$count)
{
$update=$role->update(['role_id'=>$new_role]);
if($update)
{
return redirect()->route('RoleUser.index');	
}
}
else
{
return redirect()->route('RoleUser.index');	

}
}
public function destroy($roleUser)
{
$user=RoleUser::where(['user_id'=>$roleUser]);
$delete=$user->delete();
if($delete)
{
return redirect()->route('RoleUser.index');	
}
}
}
