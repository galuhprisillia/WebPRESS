<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarketingRequest extends FormRequest
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
            'nisn'         => 'required|digits:10|unique:marketing,nisn',
            'student_name' => 'required|string|max:30',
            'study_period' => 'required',
            'mtk_1'        => $subject_rule,
            'b_indo_1'     => $subject_rule,
            'b_ing_1'      => $subject_rule,
            'p_e_b_1'      => $subject_rule,
            's_d_1'        => $subject_rule,
            'a_r_p_1'      => $subject_rule,
            'p_p_1'        => $subject_rule,
            'p_u_p_1'      => $subject_rule,
            's_p_1'        => $subject_rule,
            'p_o_1'        => $subject_rule,
            'mtk_2'        => $subject_rule,
            'b_indo_2'     => $subject_rule,
            'b_ing_2'      => $subject_rule,
            'p_e_b_2'      => $subject_rule,
            's_d_2'        => $subject_rule,
            'a_r_p_2'      => $subject_rule,
            'p_p_2'        => $subject_rule,
            'p_u_p_2'      => $subject_rule,
            's_p_2'        => $subject_rule,
            'p_o_2'        => $subject_rule,
            'mtk_3'        => $subject_rule,
            'b_indo_3'     => $subject_rule,
            'b_ing_3'      => $subject_rule,
            'p_e_b_3'      => $subject_rule,
            'p_p_b_3'      => $subject_rule,
            'p_e_p_3'      => $subject_rule,
            'p_b_d_3'      => $subject_rule,
            'k_b_3'        => $subject_rule,
            'a_b_3'        => $subject_rule,
            'a_t_3'        => $subject_rule,
            'p_y_p_3'      => $subject_rule,
            'mtk_4'        => $subject_rule,
            'b_indo_4'     => $subject_rule,
            'b_ing_4'      => $subject_rule,
            'p_e_b_4'      => $subject_rule,
            'p_p_b_4'      => $subject_rule,
            'p_e_p_4'      => $subject_rule,
            'p_b_d_4'      => $subject_rule,
            'k_b_4'        => $subject_rule,
            'a_b_4'        => $subject_rule,
            'a_t_4'        => $subject_rule,
            'p_y_p_4'      => $subject_rule,
            'mtk_5'        => $subject_rule,
            'b_indo_5'     => $subject_rule,
            'b_ing_5'      => $subject_rule,
            'p_p_b_5'      => $subject_rule,
            'p_e_p_5'      => $subject_rule,
            'p_b_d_5'      => $subject_rule,
            'k_b_5'        => $subject_rule,
            'a_b_5'        => $subject_rule,
            'a_t_5'        => $subject_rule,
            'p_y_p_5'      => $subject_rule,
            'status',
            'university'
        ];
    }
}
