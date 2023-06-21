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
					<h4>All Record Status in Courts</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">Record</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">All Status</a></li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-lg-12">
				<div class="row tab-content">
					<div id="list-view" class="tab-pane fade active show col-lg-12">
						<div class="card">
							<div class="card-header">
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