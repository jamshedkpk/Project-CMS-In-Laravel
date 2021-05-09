<?php
namespace App;
use App\User;
use App\RoleUser;
use App\Profile;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
public $primaryKey='role_id';
public $timestamps=false;
protected $guards=[];

public function users()
{
return $this->belongsToMany(User::class,'role_users','role_id','user_id');	
}

}
