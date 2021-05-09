<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class Validation_User extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return 
[
'user_name'=>'required|alpha',
'user_email'=>'required|email',
'user_password'=>'required',
];
}
}
