@extends('templates.master')

@section('content')
<div class="page has-sidebar-left height-full">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
            <ol class="breadcrumb font-weight-bold">
                <li class="breadcrumb-item">
                    <a href="/homepage">Homepage</a>
                </li>
                <li class="breadcrumb-item active">About</li>
            </ol>
            <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box white p-2 r-5">
                            <div class="card-body p-5">
                                <blockquote>
                                    <h4>
                                        <b>
                                            WebPRESS (Website Prediksi SNMPTN untuk SMK) merupakan aplikasi berbasis web yang dapat memprediksi kelulusan siswa SMK pada jalur seleksi SNMPTN. Hasil prediksi pada aplikasi WebPRESS berdasarkan mempelajari data latih yang berupa nilai rapot alumni yang lulus dan tidak lulus pada SNMPTN.
                                        </b>
                                    </h4>
                                  <br>
                                    <h4>
                                        <b>
                                        <i>WebPRESS an acronym of Website Prediction of SNMPTN for SMK student is web based application that can predict SNMPTN acceptance for Vocational High School student. The result of prediction based on alumni report card that accepted and not accepted through SNMPTN (training data).</i>
                                        </b>
                                    </h4>

                                    <br>
                                    <h4>
                                        <i>
                                            "Author - Galuh Prisillia"
                                        </i>
                                    </h4>
                                </blockquote>
                              </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection