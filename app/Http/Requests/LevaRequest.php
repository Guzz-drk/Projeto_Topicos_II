<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevaRequest extends FormRequest
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
            'dt_fabricacao' => 'required',
            'fervura_inicial' => 'required',
            'tempo_fervura' => 'required',
            'qtd_agua' => 'required',
            'qtd_fermento' => 'required',
            'fermentos_id' => 'required',
            'lupulos_id' => 'required',
            'tempo_fervura_final' => 'required',
        ];
    }
}