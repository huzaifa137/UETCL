@extends('layouts.header_footer_navbar')
@section('content')
@include('include.message')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
    @if (Session::get('success'))
        <div class="alert alert-primary">
            {{Session::get('success')}}
        </div>
    @endif
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Enter Court Details</h4>
                </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void()">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void()">Court</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Pending court cases</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
					
					<div class="col-lg-12">
						<div class="row tab-content">
							
							
							<div id="grid-view" class="tab-pane fade active show col-lg-12">
								<div class="row">

									@foreach ($pendings as $pending)
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												
												
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="/assets/images/profile/small/pic2.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="my-4">{{$pending->investigation_officer}}</h3>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Police station  :</span><strong>{{$pending->police_station}}</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Police Case Ref:</span><strong>{{$pending->police_case_ref}}</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Inter Ref Number:</span><strong>{{$pending->Inter_ref_number}}</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Case Status:</span><strong>{{$pending->Case_Status}}</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="staff-profile.html">Enter court information</a>
												</div>
											</div>
										</div>
									</div>

									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
    </div>
</div>

@endsection