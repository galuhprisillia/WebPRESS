<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
	public function setStudentNameAttribute($student_name) 
    {
        $this->attributes['student_name'] = ucwords($student_name);
    }

    protected $table = 'Marketing';
    
    protected $fillable = [
        'nisn',
        'student_name',
        'study_period',
		'mtk_1',
		'b_indo_1',
		'b_ing_1',
		'p_e_b_1',
		's_d_1',
		'a_r_p_1',
		'p_p_1',
		'p_u_p_1',
		's_p_1',
		'p_o_1',
		'mtk_2',
		'b_indo_2',
		'b_ing_2',
		'p_e_b_2',
		's_d_2',
		'a_r_p_2',
		'p_p_2',
		'p_u_p_2',
		's_p_2',
		'p_o_2',
		'mtk_3',
		'b_indo_3',
		'b_ing_3',
		'p_e_b_3',
		'p_p_b_3',
		'p_e_p_3',
		'p_b_d_3',
		'k_b_3',
		'a_b_3',
		'a_t_3',
		'p_y_p_3',
		'mtk_4',
		'b_indo_4',
		'b_ing_4',
		'p_e_b_4',
		'p_p_b_4',
		'p_e_p_4',
		'p_b_d_4',
		'k_b_4',
		'a_b_4',
		'a_t_4',
		'p_y_p_4',
		'mtk_5',
		'b_indo_5',
		'b_ing_5',
		'p_p_b_5',
		'p_e_p_5',
		'p_b_d_5',
		'k_b_5',
		'a_b_5',
		'a_t_5',
		'p_y_p_5',
        'status',
        'university'
    ];
}
