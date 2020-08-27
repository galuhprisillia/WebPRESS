<table class="table table-bordered">
    <thead class="font-weight-bold">
        <th style="width: 350px"> STUDENT NAME </th>
        <th> NISN </th>
        <th> STUDY PERIOD </th>
    </thead>
    <tbody>
        <tr>
            <td>
                {!! Form::text('student_name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('student_name'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('student_name')}}</span>
                </div>    
                @endif
            </td>
            <td>
                {!! Form::number('nisn', null, ['class' => 'form-control']) !!}
                @if ($errors->has('nisn'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('nisn')}}</span>
                </div>    
                @endif
            </td>
            <td>
                {!! Form::number('study_period', null, ['class' => 'form-control']) !!}
                @if ($errors->has('study_period'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('study_period')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered">
    <thead>
        <th style="width: 350px"> Semester </th>
        <th> Study Subjects </th>
        <th> Score </th>
    </thead>
    <tbody class="border-bold">
        <tr>
            <td rowspan="10"> Semester 1 </td>
            <td> Matematika </td>
            <td> 
                {!! Form::number('mtk_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> 
                {!! Form::number('b_indo_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_indo_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> 
                {!! Form::number('b_ing_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_ing_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengantar Ekonomi dan Bisnis </td>
            <td> 
                {!! Form::number('p_e_b_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_e_b_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_e_b_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Simulasi Digital </td>
            <td>  
                {!! Form::number('s_d_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_d_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_d_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Analisa dan Riset Pasar </td>
            <td> 
                {!! Form::number('a_r_p_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_r_p_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_r_p_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Perencanaan Pemasaran </td>
            <td> 
                {!! Form::number('p_p_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_p_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_p_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengelolaan Usaha Pemasaran </td>
            <td> 
                {!! Form::number('p_u_p_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_u_p_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_u_p_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Strategi Pemasaran </td>
            <td>
                {!! Form::number('s_p_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_p_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_p_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pemasaran Online </td>
            <td> 
                {!! Form::number('p_o_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_o_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_o_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>  
        <tr>
            <td rowspan="10"> Semester 2 </td>
            <td> Matematika </td>
            <td> 
                {!! Form::number('mtk_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> 
                {!! Form::number('b_indo_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_indo_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> 
                {!! Form::number('b_ing_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_ing_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengantar Ekonomi dan Bisnis </td>
            <td> 
                {!! Form::number('p_e_b_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_e_b_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_e_b_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Simulasi Digital </td>
            <td> 
                {!! Form::number('s_d_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_d_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_d_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Analisa dan Riset Pasar </td>
            <td> 
                {!! Form::number('a_r_p_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_r_p_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_r_p_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Perencanaan Pemasaran </td>
            <td> 
                {!! Form::number('p_p_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_p_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_p_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengelolaan Usaha Pemasaran </td>
            <td>
                {!! Form::number('p_u_p_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_u_p_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_u_p_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Strategi Pemasaran </td>
            <td> 
                {!! Form::number('s_p_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_p_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_p_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pemasaran Online </td>
            <td> 
                {!! Form::number('p_o_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_o_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_o_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody> 
        <tr>
            <td rowspan="11"> Semester 3 </td>
            <td> Matematika </td>
            <td> 
                {!! Form::number('mtk_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> 
                {!! Form::number('b_indo_3', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('b_indo_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> 
                {!! Form::number('b_ing_3', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('b_ing_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengantar Ekonomi dan Bisnis </td>
            <td> 
                {!! Form::number('p_e_b_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_e_b_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_e_b_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Prinsip-Prinsip Bisnis </td>
            <td> 
                {!! Form::number('p_p_b_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_p_b_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_p_b_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengetahuan Produk </td>
            <td> 
                {!! Form::number('p_e_p_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_e_p_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_e_p_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Penataan Barang Dagangan </td>
            <td> 
                {!! Form::number('p_b_d_3', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_b_d_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_b_d_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Komunikasi Bisnis </td>
            <td> 
                {!! Form::number('k_b_3', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('k_b_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('k_b_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Barang </td>
            <td> 
                {!! Form::number('a_b_3', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('a_b_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_b_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Transaksi </td>
            <td> 
                {!! Form::number('a_t_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_t_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_t_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pelayanan Penjualan </td>
            <td> 
                {!! Form::number('p_y_p_3', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_y_p_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_y_p_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody> 
        <tr>
            <td rowspan="11"> Semester 4 </td>
            <td> Matematika </td>
            <td> 
                {!! Form::number('mtk_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> 
                {!! Form::number('b_indo_4', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('b_indo_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> 
                {!! Form::number('b_ing_4', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('b_ing_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengantar Ekonomi dan Bisnis </td>
            <td> 
                {!! Form::number('p_e_b_4', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('b_ing_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Prinsip-Prinsip Bisnis </td>
            <td>  
                {!! Form::number('p_p_b_4', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_p_b_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_p_b_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengetahuan Produk </td>
            <td> 
                {!! Form::number('p_e_p_4', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_e_p_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_e_p_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Penataan Barang Dagangan </td>
            <td> 
                {!! Form::number('p_b_d_4', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_b_d_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_b_d_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Komunikasi Bisnis </td>
            <td> 
                {!! Form::number('k_b_4', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('k_b_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('k_b_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Barang </td>
            <td> 
                {!! Form::number('a_b_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_b_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_b_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Transaksi </td>
            <td> 
                {!! Form::number('a_t_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_t_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_t_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pelayanan Penjualan </td>
            <td> 
                {!! Form::number('p_y_p_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_y_p_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_y_p_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody> 
        <tr>
            <td rowspan="10"> Semester 5 </td>
            <td> Matematika </td>
            <td>  
                {!! Form::number('mtk_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> 
                {!! Form::number('b_indo_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_indo_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> 
                {!! Form::number('b_ing_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_ing_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Prinsip-Prinsip Bisnis </td>
            <td>  
                {!! Form::number('p_p_b_5', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_p_b_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_p_b_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengetahuan Produk </td>
            <td> 
                {!! Form::number('p_e_p_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_e_p_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_e_p_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Penataan Barang Dagangan </td>
            <td> 
                {!! Form::number('p_b_d_5', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_b_d_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_b_d_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Komunikasi Bisnis </td>
            <td> 
                {!! Form::number('k_b_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('k_b_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('k_b_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Barang </td>
            <td> 
                {!! Form::number('a_b_5', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('a_b_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_b_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Transaksi </td>
            <td> 
                {!! Form::number('a_t_5', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('a_t_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_t_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pelayanan Penjualan </td>
            <td> 
                {!! Form::number('p_y_p_5', null, ['class' => 'form-control']) !!} 
                @if ($errors->has('p_y_p_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_y_p_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>                                    
    <tfoot>
        <tr>
            <td colspan="3"> {!! Form::submit('Submit Data', ['class' => 'btn btn-primary']) !!} </td>
        </tr>
    </tfoot>
</table>