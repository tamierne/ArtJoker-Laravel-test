<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'    => [
                'string',
                // 'required',
            ],
            'email'   => [
                // 'required',
                'unique:users,email,' . request()->route('user')->id,
            ],
            'profile_photo_url'  => [
                'string',
            ],
            'is_blocked'     => [
                'boolean',
            ],
        ];
    }

}