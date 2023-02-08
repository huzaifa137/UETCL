@extends('layouts.header_footer_navbar')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
    
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Case Details</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Case</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Case Details</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="text-center p-3 overlay-box" style="background-image: url(images/big/img1.jpg);">
                                <div class="profile-photo">
                                    <img src="/assets-3/images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
                                </div>
                                <h3 class="mt-3 mb-1 text-white">{{$data->investigation_officer}}</h3>
                                <p class="text-white mb-0">Investigation officer</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Police station</span> <strong class="text-muted">{{$data->police_station}}</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Police Case Ref</span> <strong class="text-muted">{{$data->police_case_ref}}</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Inter Ref Number</span> <strong class="text-muted">{{$data->Inter_ref_number}}</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Transmission Line</span> <strong class="text-muted">{{$data->Transmission_Line}}</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Case Status</span> <strong class="text-muted">{{$data->Case_Status}}</strong></li>
                                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Date</span> <strong class="text-muted">{{$data->Date}}</strong></li>
                            </ul>
                        </div>
                    </div>
                 
                    
                  
                </div>
            </div>
            <div class="col-xl-9 col-xxl-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">particulars of the case</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-4">
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                            </div>
                                        </div>
                                        <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                            <h4 class="text-primary mb-4">Brief facts of the case</h4>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection