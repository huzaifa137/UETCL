@extends('layouts.header_footer_navbar')
@section('content')
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
					<h4>All General Cases Report</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">General Cases</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">Download Report</a></li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-lg-12">
				<div class="row tab-content">
					<div id="list-view" class="tab-pane fade active show col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">All General Cases Report</h4>
								<a href="{{route('pdf-generator')}}" class="btn btn-primary"> <i class="la la-download"></i> <span>&nbsp </span> Download General Report</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>Police Station</th>
												<th>Investigation Officer</th>
												<th>Police Case Reference</th>
												<th>Inter Ref Number</th>
												<th>Transmission line</th>
												<th>Case Status</th>
												<th>Date</th>

											</tr>
										</thead>
										<tbody>
											@foreach ($data as $info)
											<tr style="border-bottom:1px solid black">
												<td>{{$info->police_station}}</td>
												<td>{{$info->investigation_officer}}</td>
												<td>{{$info->police_case_ref}}</td>
												<td>{{$info->Inter_ref_number}}</td>
												<td>{{$info->Transmission_Line}}</td>
												<td>{{$info->Case_Status}}</td>
												<td>{{$info->Date}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
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