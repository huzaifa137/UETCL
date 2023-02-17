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
					<h4>All Year Cases Report</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">Year Cases</a></li>
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
								<h4 class="card-title">All Year Cases Report</h4>
								<a href="{{'year-generator/'.$value}}" class="btn btn-primary"> <i class="la la-download"></i> <span>&nbsp </span> Download Year Report</a>
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
												{{-- <th>Action</th> --}}
											</tr>
										</thead>
										<tbody>
											@foreach ($data as $info)
											<tr>
												<td>{{$info->police_station}}</td>
												<td>{{$info->investigation_officer}}</td>
												<td>{{$info->police_case_ref}}</td>
												<td>{{$info->Inter_ref_number}}</td>
												<td>{{$info->Transmission_Line}}</td>
												<td>{{$info->Case_Status}}</td>
												<td>{{$info->Date}}</td>
												
												{{-- <td> --}}
													{{-- <a href="{{'Edit/'.$info->id}}" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to edit this case ?')"><i class="la la-pencil"></i></a>
													<a href="{{'delete/'.$info->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this case ?')"><i class="la la-trash-o"></i></a>
													<a href="{{'details/'}}" class="btn btn-sm btn-success"><i class="la la-eye"></i></a> --}}
													{{-- <a href="{{'details/'.$info->id}}" class="btn btn-sm btn-warning"><i class="la la-eye"></i></a> --}}
												{{-- </td>												 --}}
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