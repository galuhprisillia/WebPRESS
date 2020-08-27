<?php

namespace App\Imports;

use App\Accountancy;
use Maatwebsite\Excel\Concerns\ToModel;

class AccountancyImport implements ToModel
{
    public function model(array $row)
    {
        return new Accountancy([
            'nisn'          => $row[1],
            'student_name'  => $row[2],
            'study_period'  => $row[3],
            'mtk_1'         => $row[4],
            'b_indo_1'      => $row[5],
            'b_ing_1'       => $row[6],
            'p_a_1'         => $row[7],
            'e_p_1'         => $row[8],
            'd_p_1'         => $row[9],
            's_s_1'         => $row[10],
            's_d_1'         => $row[11],
            'mtk_2'         => $row[12],
            'b_indo_2'      => $row[13],
            'b_ing_2'       => $row[14],
            'p_a_2'         => $row[15],
            'e_p_2'         => $row[16],
            'd_p_2'         => $row[17],
            's_s_2'         => $row[18],
            's_d_2'         => $row[19],
            'mtk_3'         => $row[20],
            'b_indo_3'      => $row[21],
            'b_ing_3'       => $row[22],
            'p_a_3'         => $row[23],
            'a_p_3'         => $row[24],
            'a_p_d_3'       => $row[25],
            'a_k_3'         => $row[26],
            'k_a_3'         => $row[27],
            'mtk_4'         => $row[28],
            'b_indo_4'      => $row[29],
            'b_ing_4'       => $row[30],
            'p_a_4'         => $row[31],
            'a_p_4'         => $row[32],
            'a_p_d_4'       => $row[33],
            'a_k_4'         => $row[34],
            'k_a_4'         => $row[35],
            'mtk_5'         => $row[36],
            'b_indo_5'      => $row[37],
            'b_ing_5'       => $row[38],
            'a_p_5'         => $row[39],
            'a_p_d_5'       => $row[40],
            'a_k_5'         => $row[41],
            'k_a_5'         => $row[42],
            'a_p_m_5'       => $row[43],
            
        ]);
    }
}
