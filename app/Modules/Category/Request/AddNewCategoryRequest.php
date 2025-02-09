<?php

namespace App\Modules\Category\Request;

use Illuminate\Foundation\Http\FormRequest;

class AddNewCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'sort' => 'integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'حقل الاسم مطلوب.',
            'phone.unique' => '  رقم الهاتف مسجل بالفعل.',
            'sort.integer' => 'يجب ان يكون رقم صحيح',
        ];
    }
}
