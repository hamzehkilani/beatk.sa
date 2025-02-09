<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'plan_id' => 'required|integer|exists:plans,id',
            'agency_name' => 'nullable|string',
            'number_of_sites' => 'nullable|string',
            'number_of_users' => 'nullable|string',
        ];
    }

    /**
     * Custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.string' => 'حقل الاسم يجب أن يكون نصاً.',
            'name.max' => 'حقل الاسم يجب ألا يتجاوز 255 حرفاً.',
            'email.required' => 'حقل البريد الإلكتروني مطلوب.',
            'email.string' => 'حقل البريد الإلكتروني يجب أن يكون نصاً.',
            'email.email' => 'حقل البريد الإلكتروني يجب أن يكون بريد إلكتروني صالح.',
            'email.unique' => 'البريد الإلكتروني مستخدم بالفعل.',
            'password.required' => 'حقل كلمة المرور مطلوب.',
            'password.string' => 'حقل كلمة المرور يجب أن يكون نصاً.',
            'password.min' => 'حقل كلمة المرور يجب أن يحتوي على 8 أحرف على الأقل.',
            'plan_id.required' => 'حقل الخطة مطلوب.',
            'plan_id.integer' => 'حقل الخطة يجب أن يكون رقماً صحيحاً.',
            'plan_id.exists' => 'الخطة المحددة غير موجودة.',
            'agency_name.string' => 'حقل اسم الوكالة يجب أن يكون نصاً.',
            'number_of_sites.string' => 'حقل عدد المواقع يجب أن يكون نصاً.',
            'number_of_users.string' => 'حقل عدد المستخدمين يجب أن يكون نصاً.',
        ];
    }
}
