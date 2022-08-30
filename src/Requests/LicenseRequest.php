<?php

namespace Adaa\Service\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'access_code' => 'required',
            'envato_email' => 'required|email'
        ];
    }

    /**
     * Translate fields with user-friendly name.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'access_code'           => trans('service::install.access_code'),
            'envato_email'          => trans('service::install.envato_email')
        ];
    }
}