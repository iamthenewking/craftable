<?php

namespace App\Http\Requests;

use App\Property;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePropertyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('property_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'min:4',
                'max:410',
                'required',
            ],
        ];
    }
}
