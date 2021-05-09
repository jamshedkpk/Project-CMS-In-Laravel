<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Catagory extends Model
{
protected $guards=[];
public $primaryKey="catagory_id";
public $timestamps=false;

public function posts()
{
return $this->hasMany(Post::class,'catagory_id');	
}

}
