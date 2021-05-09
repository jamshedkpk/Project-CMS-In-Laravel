<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class Validation_Role extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return
[
'role_name'=>'required|alpha',
];
}
}
