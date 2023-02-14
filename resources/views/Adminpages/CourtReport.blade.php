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
					<h4>Court Report Cases</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">Court</a></li>
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
								<h4 class="card-title">All Court Report</h4>
								<a href="{{route('court-generator')}}" class="btn btn-primary"> <i class="la la-download"></i> <span>&nbsp </span> Download Court Report</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>CRB</th>
												<th>LOCATION OF COURT </th>
												<th>POLICE REFERENCE</th>
												<th>CASE PARTIES UG vs</th>
												<th>DUE DATE</th>
												<th>POLICE & I/Os</th>
												<th>WITNESSES</th>
                                                <th>EVIDENCE ON RECORD</th>
                                                <th>CASE FACILITATION</th>
                                                <th>STATUS</th>
												{{-- <th>Edit</th> --}}
											</tr>
										</thead>
										<tbody>
											@foreach ($data as $info)
											<tr>
												<td>{{$info->CRB}}</td>
												<td>{{$info->Location_of_court}}</td>
												<td>{{$info->Police_station_case_Ref}}</td>
												<td>{{$info->Case_parties_UG_vs}}</td>
												<td>{{$info->Due_Date}}</td>
												<td>{{$info->Police__IOs}}</td>
												<td>{{$info->Witnesses}}</td>
												<td>{{$info->Evidence_on_Record}}</td>
                                                <td>{{$info->Case_facilitation}}</td>
                                                <td>{{$info->Status}}</td>
												{{-- <td>
													<a href="{{'Edit/'.$info->id}}" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to edit this case ?')"><i class="la la-pencil"></i></a>
													<a href="{{'delete/'.$info->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this case ?')"><i class="la la-trash-o"></i></a>
													<a href="{{'details/'.$info->id}}" class="btn btn-sm btn-success"><i class="la la-eye"></i></a>
												</td>												 --}}
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