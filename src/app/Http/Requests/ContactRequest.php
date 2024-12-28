<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category_id' => 'required|integer|exists:categories,id', 
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|string|in:男性,女性,その他',
            'email' => 'required|email|max:255',
            'tel' => 'nullable|string|max:15',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'inquiry_type' => 'required|string|max:255',
            'inquiry_content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'gender.in' => '性別は男性、女性、その他のいずれかを選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.regex' => '電話番号は5桁から15桁の数字で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'category_id.exists' => '選択したお問い合わせの種類が無効です',
        ];
    }
}
