<?php
namespace App;
use App\User;
use App\Role;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
public $primaryKey="roleuser_id";
protected $guards=[];
public $timestamps=false;
}
