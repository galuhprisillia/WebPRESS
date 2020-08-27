<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountancyRequest extends FormRequest
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
            'nisn'          => 'required|digits:10|unique:accountancy,nisn',
            'student_name'  => 'required|string|max:30',
            'study_period'  => 'required',
            'mtk_1'         => $subject_rule,
            'b_indo_1'      => $subject_rule,
            'b_ing_1'       => $subject_rule,
            'p_a_1'         => $subject_rule,
            'e_p_1'         => $subject_rule,
            'd_p_1'         => $subject_rule,
            's_s_1'         => $subject_rule,
            's_d_1'         => $subject_rule,
            'mtk_2'         => $subject_rule,
            'b_indo_2'      => $subject_rule,
            'b_ing_2'       => $subject_rule,
            'p_a_2'         => $subject_rule,
            'e_p_2'         => $subject_rule,
            'd_p_2'         => $subject_rule,
            's_s_2'         => $subject_rule,
            's_d_2'         => $subject_rule,
            'mtk_3'         => $subject_rule,
            'b_indo_3'      => $subject_rule,
            'b_ing_3'       => $subject_rule,
            'p_a_3'         => $subject_rule,
            'a_p_3'         => $subject_rule,
            'a_p_d_3'       => $subject_rule,
            'a_k_3'         => $subject_rule,
            'k_a_3'         => $subject_rule,
            'mtk_4'         => $subject_rule,
            'b_indo_4'      => $subject_rule,
            'b_ing_4'       => $subject_rule,
            'p_a_4'         => $subject_rule,
            'a_p_4'         => $subject_rule,
            'a_p_d_4'       => $subject_rule,
            'a_k_4'         => $subject_rule,
            'k_a_4'         => $subject_rule,
            'mtk_5'         => $subject_rule,
            'b_indo_5'      => $subject_rule,
            'b_ing_5'       => $subject_rule,
            'a_p_5'         => $subject_rule,
            'a_p_d_5'       => $subject_rule,
            'a_k_5'         => $subject_rule,
            'k_a_5'         => $subject_rule,
            'a_p_m_5'       => $subject_rule,
            'status',
            'univeristy'
        ];
    }
}
