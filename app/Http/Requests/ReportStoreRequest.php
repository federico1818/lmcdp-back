<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportStoreRequest extends FormRequest
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
            'reported_id' => ['required', 'integer', 'exists:users,id'],
            'observation' => ['nullable', 'string']
        ];
    }

    public function attributes()
    {
        return $this->only([
            'reported_id',
            'observation'
        ]);
    }
}
