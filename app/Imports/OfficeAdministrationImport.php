<?php

namespace App\Imports;

use App\OfficeAdministration;
use Maatwebsite\Excel\Concerns\ToModel;

class OfficeAdministrationImport implements ToModel
{
    public function model(array $row)
    {
        return new OfficeAdministration([
            'nisn'          => $row[1],
            'student_name'  => $row[2],
            'study_period'  => $row[3],
            'mtk_1'         => $row[4],
            'b_indo_1'      => $row[5],
            'b_ing_1'       => $row[6],
            'p_a_p_1'       => $row[7],
            'o_p_1'         => $row[8],
            'k_p_d_1'       => $row[9],
            'k_a_p_1'       => $row[10],
            's_k_d_1'       => $row[11],
            'mtk_2'         => $row[12],
            'b_indo_2'      => $row[13],
            'b_ing_2'       => $row[14],
            'p_a_p_2'       => $row[15],
            'o_p_2'         => $row[16],
            'k_p_d_2'       => $row[17],
            'k_a_p_2'       => $row[18],
            's_k_d_2'       => $row[19],
            'mtk_3'         => $row[20],
            'b_indo_3'      => $row[21],
            'b_ing_3'       => $row[22],
            'p_a_p_3'       => $row[23],
            'a_h_k_3'       => $row[24],
            'a_s_p_3'       => $row[25],
            'a_k_p_3'       => $row[26],
            'a_k_u_3'       => $row[27],
            'mtk_4'         => $row[28],
            'b_indo_4'      => $row[29],
            'b_ing_4'       => $row[30],
            'p_a_p_4'       => $row[31],
            'a_h_k_4'       => $row[32],
            'a_s_p_4'       => $row[33],
            'a_k_p_4'       => $row[34],
            'a_k_u_4'       => $row[35],
            'mtk_5'         => $row[36],
            'b_indo_5'      => $row[37],
            'b_ing_5'       => $row[38],
            'a_h_k_5'       => $row[39],
            'a_s_p_5'       => $row[40],
            'a_k_p_5'       => $row[41],
            'a_k_u_5'       => $row[42],
        ]);
    }
}
