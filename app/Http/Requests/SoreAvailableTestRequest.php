<?php

namespace App\Http\Requests;

use App\AvailableTest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class SoreAvailableTestRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'name'     => [
                'required'
            ],
       
        ];

    }
}
