<?php
namespace App\Http\Controllers;
use App\Role;
use App\Http\Requests\Validation_Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
public function index()
{
$roles=Role::all();
return view('Dashboard.Roles.Index',compact('roles'));
}
public function create()
{
return view('Dashboard.Roles.Create');
}
public function store(Validation_Role $request)
{
$role_name=$request->role_name;
$obj=new Role();
$obj->role_name=$role_name;
$result=$obj->save();
if($result)
{
return redirect()->route('Role.index');	
}
}
public function show($role)
{
$role=Role::find($role);
return view('Dashboard.Roles.Show',compact('role'));
}
public function edit($role)
{
$role=Role::find($role);
return view('Dashboard.Roles.Edit',compact('role'));
}
public function update(Validation_Role $request,$role)
{
$role=Role::find($role);
$role->role_name=$request->role_name;
$result=$role->update();
if($result)
{
return redirect()->route('Role.index');	
}
}
public function destroy($role)
{
$role=Role::find($role);
$result=$role->delete();
if($result)
{
return redirect()->route('Role.index');	
}
}
}
