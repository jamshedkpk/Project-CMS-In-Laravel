<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Catagory;
class Post extends Model
{
public $primaryKey="post_id";
protected $guards=[];
public $timestamps=false;

public function catagory()
{
return $this->belongsTo(Catagory::class,'catagory_id');	
}

}
