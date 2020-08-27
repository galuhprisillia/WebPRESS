<?php

namespace App\Exports;

use App\OfficeAdministration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 

class OfficeAdministrationExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OfficeAdministration::all();
    }

    public function headings(): array
    {
        return [
        'No.',
        'nisn',
        'student_name',
        'study_period',
        'mtk_1',
        'b_indo_1',
        'b_ing_1',
        'p_a_p_1',
        'o_p_1',
        'k_p_d_1',
        'k_a_p_1',
        's_k_d_1',
        'mtk_2',
        'b_indo_2',
        'b_ing_2',
        'p_a_p_2',
        'o_p_2',
        'k_p_d_2',
        'k_a_p_2',
        's_k_d_2',
        'mtk_3',
        'b_indo_3',
        'b_ing_3',
        'p_a_p_3',
        'a_h_k_3',
        'a_s_p_3',
        'a_k_p_3',
        'a_k_u_3',
        'mtk_4',
        'b_indo_4',
        'b_ing_4',
        'p_a_p_4',
        'a_h_k_4',
        'a_s_p_4',
        'a_k_p_4',
        'a_k_u_4',
        'mtk_5',
        'b_indo_5',
        'b_ing_5',
        'a_h_k_5',
        'a_s_p_5',
        'a_k_p_5',
        'a_k_u_5',
        'status',
        'university',
        'created_at',
        'updated_at'
        ];

    }
}
