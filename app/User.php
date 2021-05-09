<?php
namespace App;
use App\Post;
use App\Profile;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
public $timestamps=false;// To make false timestamps
protected $guard=[];  // To enable factory
protected $primaryKey='user_id'; // To tell our primary key

/* 
Function for one to one relationship for e.g.
One user has one profile. In function profile first we write forign key and then we write primary key
 */
public function profile()
{
return $this->has('App\Profile','user_id');
}

public function posts()
{
return $this->hasMany(Post::class,'user_id');
}
/*
one user has many roles and each role can be assigned to many users.
*/
public function roles()
{
return $this->belongsToMany(Role::class,'role_users','user_id','role_id');	
}

}
