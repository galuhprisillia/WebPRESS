@extends('templates.master')

@section('content')
<div class="page has-sidebar-left">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
                <ol class="breadcrumb font-weight-bold">
                    <li class="breadcrumb-item active">
                        <a href="/homepage">Homepage</a>
                    </li>
                    <li class="breadcrumb-item active">Guide</li>
                </ol>
                <hr>
                <div class="card my-3">
                    <div class="card-header bg-primary text-white">
                        <center><h3>Prediction System</h3></center>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead class="font-weight-bold">
                            <th style="width: 5px"> No. </th>
                            <th style="text-align:center; width: 450px"> English </th>
                            <th style="text-align:center"> Bahasa Indonesia </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td> Choose one from three menu based on student’s major which will be predicted </td>
                                <td> Pilih salah satu dari tiga jurusan sesuai dengan jurusan siswa yang akan di prediksi </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td> Click "Create Prediction" button at the right top of Prediction System page to make a new prediction </td>
                                <td> Klik tombol "Create Prediction" di bagian kanan atas untuk membuat prediksi baru </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td> Fill all the field in Student’s Data and Score Input Form Page. The NISN number must be 10 digit number.  The score form in this page are score of several subjects within semester one to semester five with a range of 1-100 </td>
                                <td> Isi kolom nama siswa, NISN yang berisi 10 digit angka, tahun ajaran, dan semua nilai mata pelajaran yang ada pada form "student score input form" dari semester satu sampai dengan semester lima dengan kisaran angka 1-100 </td>
                            </tr>  
                            <tr>
                                <td>4.</td>
                                <td> After user input all data and score in this page, then click “Submit Data” button to get the prediction results</td>
                                <td> Setelah semua data yang dimasukan benar dan semua kolom pada halaman ini terisi, klik tombol submit untuk melihat hasil dari prediksi</td>
                            </tr>  
                            <tr>
                                <td>5.</td>
                                <td> User can save and download the prediction results by click “Export” button at the right top of this page. If the action is success, the file that contain prediction results will be downloaded in (.xlsx) or (.xls) format </td>
                                <td> Untuk mengunduh dan menyimpan hasil dari prediksi, klik tombol "export" di bagian kanan atas, jika berhasil maka hasil dari prediksi akan langsung terunduh dalam bentuk file excel dengan format (.xlsx) atau (.xls) </td>
                            </tr>  
                            <tr>
                                <td>6.</td>
                                <td> If user want to return to the "Prediction System" page to re-select a student major then click the "Back" button </td>
                                <td> Jika ingin kembali ke halaman "Prediction System" untuk memilih kembali jurusan siswa maka klik tombol "Back" </td>
                            </tr>       
                        </tbody>
                    </table>
                </div>
                <div class="card my-3">
                    <div class="card-header bg-primary text-white">
                        <center><h3>Upload Excel</h3></center>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead class="font-weight-bold">
                            <th style="width: 5px"> No. </th>
                            <th style="text-align:center; width: 450px"> English </th>
                            <th style="text-align:center"> Bahasa Indonesia </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td> Choose one from three menu based on student’s major which will be predicted</td>
                                <td>Pilih salah satu dari tiga jurusan sesuai dengan jurusan siswa yang akan di prediksi</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td> Click “Choose File” button to choose excel file that contain student’s data and score which will be predicted (excel file must be in xlsx, xls, or csv format). Then click “Import” button to upload the excel file. After that, user will get the prediction results.  </td>
                                <td> Klik tombol "Choose File" untuk memilih file excel yang berisi data dan nilai siswa yang akan di prediksi dalam format (.xlsx), (.xls), atau (csv). Setelah memilih file, klik tombol "import" untuk mengunggah file excel. Setelah itu, tampilan akan langsung dialihkan ke halaman hasil prediksi untuk melihat hasil dari prediksi</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td> The excel file that will be uploaded must be following the template in below and may not used a template that is different from the below. User must first download the excel file template below and fill in the data in the excel file based on the student data which will be predicted. After all the data is filled in, delete the top row of the excel file (the headings of this file which is NISN, Student Name, Study Periode, Score of some subject within semester one to semester five) so the file can be uploaded </td>
                                <td> File excel yang diunggah harus mengikuti format di bawah ini dan tidak boleh menggunakan template yang berbeda dari template di bawah ini. Pengguna harus mengunduh terlebih dahulu template file excel di bawah ini dan mengisi data yang ada pada file excel tersebut sesuai dengan data siswa yang akan diprediksi. Setelah semua data terisi, hapus baris paling atas dari file excel tersebut (baris yang berisi tulisan NISN, Student Name, Study Priode, nilai mata pelajaran dari semester satu sampai dengan semester lima) agar file tersebut bisa diunggah </td>
                            </tr> 
                            <tr>
                                <td>4.</td>
                                <td colspan="2" class="text-center"><a href="/AccountancyTemplate">Template for Accountancy Major</a> | <a href="/MarketingTemplate">Template for Marketing Major</a> | <a href="/OfficeAdministrationTemplate">Template for Office Administration Major</a></td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
                <div class="card my-3">
                    <div class="card-header bg-primary text-white">
                        <center><h3>History</h3></center>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead class="font-weight-bold">
                            <th style="width: 5px"> No. </th>
                            <th style="text-align:center; width: 450px"> English </th>
                            <th style="text-align:center"> Bahasa Indonesia </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>There is there menu on the top of this page, choose one from three menu based on student’s major to showing the history of prediction results</td>
                                <td>Tiga tab menu pada bagian atas halaman ini merupakan jurusan yang dapat di pilih oleh pengguna untuk melihat riwayat dari prediksi setiap jurusan</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>If there is wrong data when user input the student’s data and score, then click “Edit” button in option column that want to edit</td>
                                <td>Apabila ada kesalahan dalam memasukan data dan nilai siswa, klik tombol "edit" pada riwayat hasil prediksi yang ingin diubah datanya</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Click “DELETE” button that want to remove from history or click "Delete All" button to remove all history</td>
                                <td>Klik "DELETE" pada riwayat hasil prediksi yang ingin dihapus atau klik tombol "Delete All" untuk menghapus semua riwayat hasil prediksi</td>
                            </tr>    
                        </tbody>
                    </table>
                </div>
                <div class="card my-3">
                    <div class="card-header bg-primary text-white">
                        <center><h3>Guide</h3></center>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead class="font-weight-bold">
                            <th style="width: 5px"> No. </th>
                            <th style="text-align:center; width: 450px"> English </th>
                            <th style="text-align:center"> Bahasa Indonesia </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>User can see the guidelines and procedures for using WebPRESS on this page</td>
                                <td>Pengguna dapat melihat panduan dan tata cara menggunakan WebPRESS pada halaman ini</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card my-3">
                    <div class="card-header bg-primary text-white">
                        <center><h3>User Account</h3></center>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead class="font-weight-bold">
                            <th style="width: 5px"> No. </th>
                            <th style="text-align:center; width: 450px"> English </th>
                            <th style="text-align:center"> Bahasa Indonesia </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Click the blue down-arrow button to display the "Edit Profile", "Change Password" and "Logout" menus </td>
                                <td>Klik tombol panah bawah yang berwarna biru untuk menampilkan menu "Edit profile", "Change Password", dan "Logout"</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>The "Edit profile" is used to change user data, the "Change Password" is used to change user password, "Logout" to exit WebPRESS</td>
                                <td>"Edit profile" digunakan untuk mengubah data pengguna, "Change Password" digunakan untuk mengubah password pengguna, "Logout" untuk keluar dari WebPRESS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection