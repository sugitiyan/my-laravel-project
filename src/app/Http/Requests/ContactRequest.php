<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name.required' => '姓を入力してください',
        'last_name.string' => '姓を文字列で入力してください',
        'last_name.max' => '姓を255文字以下で入力してください',

        'first_name.required' => '名を入力してください',
        'first_name.string' => '名を文字列で入力してください',
        'first_name.max' => '名を255文字以下で入力してください',

        'email.required' => 'メールアドレスを入力してください',
        'email.string' => 'メールアドレスを文字列で入力してください',
        'email.email' => '有効なメールアドレス形式を入力してください',
        'email.max' => 'メールアドレスを255文字以下で入力してください',

        'gender.required' => '性別を選択してください',
        'gender.in' => '性別は「male」または「female」で入力してください',

        'phone.numeric' => '電話番号を数値で入力してください',
        'phone.digits_between' => '電話番号を10桁から11桁の間で入力してください',

        'address.string' => '住所を文字列で入力してください',
        'address.max' => '住所を255文字以下で入力してください',

        'building.string' => '建物名を文字列で入力してください',
        'building.max' => '建物名を255文字以下で入力してください',

        'inquiry_type.required' => 'お問い合わせの種類を選択してください',
        'inquiry_type.string' => 'お問い合わせの種類を文字列で入力してください',
        'inquiry_type.max' => 'お問い合わせの種類を255文字以下で入力してください',

        'inquiry_content.required' => 'お問い合わせ内容を入力してください',
        'inquiry_content.string' => 'お問い合わせ内容を文字列で入力してください',
        'inquiry_content.max' => 'お問い合わせ内容を1000文字以下で入力してください',
        ];
    }
}
