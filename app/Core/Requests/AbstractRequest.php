<?php


namespace App\Core\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class AbstractRequest extends FormRequest
{

    /**
     * @return bool
     */
    public function expectsJson()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function wantsJson()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return \Illuminate\Validation\Validator
     */
    public function getValidator():\Illuminate\Validation\Validator
    {
        return Validator::make($this->all(), $this->rules())
            ->setAttributeNames($this->attributes());
    }
}