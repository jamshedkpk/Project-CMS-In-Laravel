<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class Validation_Profile extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return
[
'profile_image'=>'required|image',
'profile_mobileno'=>'required|regex:/^[0][0-9]{10}$/',
'profile_cnicno'=>'required|regex:/^[0-9]{13}$/',
];
}
public function attributes()
{
return 
[
'profile_image'=>'Image',
'profile_mobileno'=>'Mobile No',
'profile_cnicno'=>'CNIC No',
]; 
}
}
