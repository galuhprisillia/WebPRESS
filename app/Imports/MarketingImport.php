<?php

namespace App\Imports;

use App\Marketing;
use Maatwebsite\Excel\Concerns\ToModel;

class MarketingImport implements ToModel
{
    public function model(array $row)
    {
        return new Marketing([
            'nisn'          => $row[1],
            'student_name'  => $row[2],
            'study_period'  => $row[3],
            'mtk_1'         => $row[4],
            'b_indo_1'      => $row[5],
            'b_ing_1'       => $row[6],
            'p_e_b_1'       => $row[7],
            's_d_1'         => $row[8],
            'a_r_p_1'       => $row[9],
            'p_p_1'         => $row[10],
            'p_u_p_1'       => $row[11],
            's_p_1'         => $row[12],
            'p_o_1'         => $row[13],
            'mtk_2'         => $row[14],
            'b_indo_2'      => $row[15],
            'b_ing_2'       => $row[16],
            'p_e_b_2'       => $row[17],
            's_d_2'         => $row[18],
            'a_r_p_2'       => $row[19],
            'p_p_2'         => $row[20],
            'p_u_p_2'       => $row[21],
            's_p_2'         => $row[22],
            'p_o_2'         => $row[23],
            'mtk_3'         => $row[24],
            'b_indo_3'      => $row[25],
            'b_ing_3'       => $row[26],
            'p_e_b_3'       => $row[27],
            'p_p_b_3'       => $row[28],
            'p_e_p_3'       => $row[29],
            'p_b_d_3'       => $row[30],
            'k_b_3'         => $row[31],
            'a_b_3'         => $row[32],
            'a_t_3'         => $row[33],
            'p_y_p_3'       => $row[34],
            'mtk_4'         => $row[35],
            'b_indo_4'      => $row[36],
            'b_ing_4'       => $row[37],
            'p_e_b_4'       => $row[38],
            'p_p_b_4'       => $row[39],
            'p_e_p_4'       => $row[40],
            'p_b_d_4'       => $row[41],
            'k_b_4'         => $row[42],
            'a_b_4'         => $row[43],
            'a_t_4'         => $row[44],
            'p_y_p_4'       => $row[45],
            'mtk_5'         => $row[46],
            'b_indo_5'      => $row[47],
            'b_ing_5'       => $row[48],
            'p_p_b_5'       => $row[49],
            'p_e_p_5'       => $row[50],
            'p_b_d_5'       => $row[51],
            'k_b_5'         => $row[52],
            'a_b_5'         => $row[53],
            'a_t_5'         => $row[54],
            'p_y_p_5'       => $row[55],
        ]);
    }
}
