<?php
namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
protected $guards=[];
public $primaryKey="profile_id";
public $timestamps=false;

public function user()
{
return $this->belongsTo('App\User','user_id');	
}
}
