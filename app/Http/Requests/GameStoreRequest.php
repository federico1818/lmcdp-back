<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameStoreRequest extends FormRequest
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
            'ball_id' => ['required', 'integer', 'exists:balls,id'],
            'platform_id' => ['required', 'integer', 'exists:platforms,id'],
        ];
    }

    public function attributes()
    {
        return $this->only([
            'ball_id',
            'platform_id'
        ]);
    }
}
