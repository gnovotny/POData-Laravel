<?php

namespace AlgoWeb\PODataLaravel\Models;

use Illuminate\Foundation\Http\FormRequest as Request;

class TestBulkCreateRequest extends Request
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
        $rules = ['data' => 'required|array'];

        $data = $this->request->get('data');

        if (isset($data)) {
            foreach ($data as $key => $val) {
                $rules['data.' . $key] = 'required|array';
                $rules['data.' . $key . '.name'] = 'required|string';
                $rules['data.' . $key . '.added_at'] = 'required|date';
                $rules['data.' . $key . '.weight'] = 'required|numeric';
                $rules['data.' . $key . '.code'] = 'required|string';
                $rules['data.' . $key . '.success'] = 'required|boolean';
            }
        }

        return $rules;
    }
}
