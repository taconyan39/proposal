<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// レビュー投稿のバリデーション
class PostReviewRequest extends FormRequest
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
            'rating' => 'required',
            'review' => 'required |string | max:210'
        ];
    }
}
