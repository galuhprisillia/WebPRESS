<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficeAdministrationRequest extends FormRequest
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
        $subject_rule = 'required|numeric|between:0,100';

        return [
            'nisn'          => 'required|digits:10|unique:officeadministration,nisn',
            'student_name'  => 'required|string|max:30',
            'study_period'  => 'required',
            'mtk_1'         => $subject_rule,
            'b_indo_1'      => $subject_rule,
            'b_ing_1'       => $subject_rule,
            'p_a_p_1'       => $subject_rule,
            'o_p_1'         => $subject_rule,
            'k_p_d_1'       => $subject_rule,
            'k_a_p_1'       => $subject_rule,
            's_k_d_1'       => $subject_rule,
            'mtk_2'         => $subject_rule,
            'b_indo_2'      => $subject_rule,
            'b_ing_2'       => $subject_rule,
            'p_a_p_2'       => $subject_rule,
            'o_p_2'         => $subject_rule,
            'k_p_d_2'       => $subject_rule,
            'k_a_p_2'       => $subject_rule,
            's_k_d_2'       => $subject_rule,
            'mtk_3'         => $subject_rule,
            'b_indo_3'      => $subject_rule,
            'b_ing_3'       => $subject_rule,
            'p_a_p_3'       => $subject_rule,
            'a_h_k_3'       => $subject_rule,
            'a_s_p_3'       => $subject_rule,
            'a_k_p_3'       => $subject_rule,
            'a_k_u_3'       => $subject_rule,
            'mtk_4'         => $subject_rule,
            'b_indo_4'      => $subject_rule,
            'b_ing_4'       => $subject_rule,
            'p_a_p_4'       => $subject_rule,
            'a_h_k_4'       => $subject_rule,
            'a_s_p_4'       => $subject_rule,
            'a_k_p_4'       => $subject_rule,
            'a_k_u_4'       => $subject_rule,
            'mtk_5'         => $subject_rule,
            'b_indo_5'      => $subject_rule,
            'b_ing_5'       => $subject_rule,
            'a_h_k_5'       => $subject_rule,
            'a_s_p_5'       => $subject_rule,
            'a_k_p_5'       => $subject_rule,
            'a_k_u_5'       => $subject_rule,
            'status',        
            'university'
        ];
    }
}
