<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class Validation_Catagory extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return
[
'catagory_title'=>'required|alpha',
'catagory_image'=>'required|image',
];
}
}
