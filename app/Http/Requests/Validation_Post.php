<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validation_Post extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return 
[
'catagory_id'=>'required',
'post_title'=>'required',
'post_content'=>'required',    
'post_image'=>'required|image',
];
}
public function attributes()
{
return
[
'catagory_id'=>'Catagory Name',
'post_title'=>'Post Title',
'post_content'=>'Post Content',
'post_image'=>'Post Image',
];    
}
}
