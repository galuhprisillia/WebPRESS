@extends('templates.master')

@section('content')
<div class="page has-sidebar-left">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
                <ol class="breadcrumb font-weight-bold">
                    <li class="breadcrumb-item active">
                        <a href="#">Homepage</a>
                    </li>
                </ol>
                <hr>
        
                <div class="cards-list">
                    
                    <a href="/prediction-system" class="mycard 1">
                        <div class="card_image"> <img src="assets/img/homepage/9.png" /> </div>
                        <div class="card_title title-white">
                            <p>Prediction System</p>
                        </div>
                    </a>

                    <a href="/upload" class="mycard 1">
                        <div class="card_image"> <img src="assets/img/homepage/8.png" /> </div>
                        <div class="card_title title-white">
                            <p>Upload Data</p>
                        </div>
                    </a>

                    <a href="/history" class="mycard 1">
                        <div class="card_image"> <img src="assets/img/homepage/10.png" /> </div>
                        <div class="card_title title-white">
                            <p>History</p>
                        </div>
                    </a>

                    <a href="/guide" class="mycard 1">
                        <div class="card_image"> <img src="assets/img/homepage/11.png" /> </div>
                        <div class="card_title title-white">
                            <p>Guide</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection