<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsAttributeUpdate extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        if (permit(['cms-attribute.edit'])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $name = $this->route('cms_attribute');
        return [
            "page_id" => 'required',
            "type" => 'required',
            'name' => 'required',
            "url" => 'required|unique:pages_attribute,url,'.$name,
        ];
    }

}
