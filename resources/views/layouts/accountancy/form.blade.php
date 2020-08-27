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
            <td rowspan="8"> Semester 1 </td>
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
            <td> Pengantar Akuntansi </td>
            <td> {!! Form::number('p_a_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_a_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_a_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Etika Profesi </td>
            <td>  {!! Form::number('e_p_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('e_p_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('e_p_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Dasar-dasar Perbankan </td>
            <td> {!! Form::number('d_p_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('d_p_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('d_p_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Spreadsheet </td>
            <td> {!! Form::number('s_s_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_s_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_s_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Simulasi Digital </td>
            <td> {!! Form::number('s_d_1', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_d_1'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_d_1')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>  
        <tr>
            <td rowspan="8"> Semester 2 </td>
            <td> Matematika </td>
            <td> {!! Form::number('mtk_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> {!! Form::number('b_indo_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_indo_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> {!! Form::number('b_ing_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_ing_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengantar Akuntansi </td>
            <td> {!! Form::number('p_a_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_a_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_a_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Etika Profesi </td>
            <td> {!! Form::number('e_p_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('e_p_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('e_p_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Dasar-dasar Perbankan </td>
            <td> {!! Form::number('d_p_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('d_p_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('d_p_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Spreadsheet </td>
            <td> {!! Form::number('s_s_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_s_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_s_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Simulasi Digital  </td>
            <td> {!! Form::number('s_d_2', null, ['class' => 'form-control']) !!}
                @if ($errors->has('s_d_2'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('s_d_2')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody> 
        <tr>
            <td rowspan="8"> Semester 3 </td>
            <td> Matematika </td>
            <td>  {!! Form::number('mtk_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> {!! Form::number('b_indo_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_indo_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> {!! Form::number('b_ing_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_ing_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengantar Akuntansi </td>
            <td> {!! Form::number('p_a_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_a_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_a_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Pajak </td>
            <td>  {!! Form::number('a_p_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_p_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_p_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Akuntansi Perusahaan Dagang </td>
            <td> {!! Form::number('a_p_d_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_p_d_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_p_d_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Akuntansi Keuangan </td>
            <td> {!! Form::number('a_k_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_k_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_k_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Komputer Akuntansi </td>
            <td> {!! Form::number('k_a_3', null, ['class' => 'form-control']) !!}
                @if ($errors->has('k_a_3'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('k_a_3')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody> 
        <tr>
            <td rowspan="8"> Semester 4 </td>
            <td> Matematika </td>
            <td>  {!! Form::number('mtk_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> {!! Form::number('b_indo_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_indo_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> {!! Form::number('b_ing_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_ing_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Pengantar Akuntansi </td>
            <td> {!! Form::number('p_a_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('p_a_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('p_a_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Pajak </td>
            <td>  {!! Form::number('a_p_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_p_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_p_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Akuntansi Perusahaan Dagang </td>
            <td> {!! Form::number('a_p_d_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_p_d_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_p_d_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Akuntansi Keuangan </td>
            <td> {!! Form::number('a_k_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_k_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_k_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Komputer Akuntansi </td>
            <td> {!! Form::number('k_a_4', null, ['class' => 'form-control']) !!}
                @if ($errors->has('k_a_4'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('k_a_4')}}</span>
                </div>    
                @endif
            </td>
        </tr>
    </tbody>
    <tbody> 
        <tr>
            <td rowspan="8"> Semester 5 </td>
            <td> Matematika </td>
            <td>  {!! Form::number('mtk_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('mtk_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('mtk_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa Indonesia </td>
            <td> {!! Form::number('b_indo_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_indo_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_indo_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Bahasa inggris </td>
            <td> {!! Form::number('b_ing_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('b_ing_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('b_ing_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Administrasi Pajak </td>
            <td>  {!! Form::number('a_p_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_p_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_p_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Akuntansi Perusahaan Dagang </td>
            <td> {!! Form::number('a_p_d_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_p_d_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_p_d_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Akuntansi Keuangan </td>
            <td> {!! Form::number('a_k_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_k_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_k_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Komputer Akuntansi </td>
            <td> {!! Form::number('k_a_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('k_a_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('k_a_5')}}</span>
                </div>    
                @endif
            </td>
        </tr>
        <tr>
            <td> Akuntansi Perusahaan Manufaktur </td>
            <td> {!! Form::number('a_p_m_5', null, ['class' => 'form-control']) !!}
                @if ($errors->has('a_p_m_5'))
                <div class="pt-2">
                    <span role="alert" class="alert alert-warning"><i class="icon-warning text-danger"></i> {{ $errors->first('a_p_m_5')}}</span>
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