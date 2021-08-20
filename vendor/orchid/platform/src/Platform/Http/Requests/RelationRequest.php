<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RelationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasAccess('platform.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'search'         => 'string|nullable',
            'model'          => 'string|required',
            'key'            => 'string|required',
            'name'           => 'string|required',
            'scope'          => 'string|nullable',
            'append'         => 'nullable',
            'searchColumns'  => 'string|nullable',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'append'        => $this->append,
            'searchColumns' => $this->searchColumns,
        ]);
    }
}
