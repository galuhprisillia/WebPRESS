<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountancy extends Model
{
    /**
     * Mutator Merubah data inputan dari strtolower to ucwords
     */
    public function setStudentNameAttribute($student_name) 
    {
        $this->attributes['student_name'] = ucwords($student_name);
    }

    protected $table = 'Accountancy';
    
    protected $fillable = [
        'nisn',
        'student_name',
        'study_period',
        'mtk_1',
        'b_indo_1',
        'b_ing_1',
        'p_a_1',
        'e_p_1',
        'd_p_1',
        's_s_1',
        's_d_1',
        'mtk_2',
        'b_indo_2',
        'b_ing_2',
        'p_a_2',
        'e_p_2',
        'd_p_2',
        's_s_2',
        's_d_2',
        'mtk_3',
        'b_indo_3',
        'b_ing_3',
        'p_a_3',
        'a_p_3',
        'a_p_d_3',
        'a_k_3',
        'k_a_3',
        'mtk_4',
        'b_indo_4',
        'b_ing_4',
        'p_a_4',
        'a_p_4',
        'a_p_d_4',
        'a_k_4',
        'k_a_4',
        'mtk_5',
        'b_indo_5',
        'b_ing_5',
        'a_p_5',
        'a_p_d_5',
        'a_k_5',
        'k_a_5',
        'a_p_m_5',
        'status',
        'university'
    ];
}
