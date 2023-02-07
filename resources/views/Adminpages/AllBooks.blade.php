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
					<h4>All Books</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">Books</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">All Books</a></li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-lg-12">
				<div class="row tab-content">
					<div id="list-view" class="tab-pane fade active show col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">All Books  </h4>
								<a href="{{route('AddBook')}}" class="btn btn-primary">+ Add new</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th></th>
												<th>Author Name</th>
												<th>Book Name</th>
												<th>Catagories</th>
												<th>Language</th>
												<th>Format</th>
												<th>Number of pages</th>
												
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data as $info)
											<tr>
												<div class="profile-photo">
													<td><img src="{{url('public/BookImage/'.$info->Book_Image)}}"  class="img-fluid rounded-circle"  alt=""></td>
												</div>
												<td>{{$info->Author_Name}}</td>
												<td>{{$info->Book_Name}}</td>
												<td>{{$info->Catagory}}</td>
												<td>{{$info->Language}}</td>
												<td>{{$info->Format}}</td>
												<td>{{$info->pages}}</td>
												
												<td>
													<a href="{{'Edit/'.$info->id}}" class="btn btn-sm btn-primary" ><i class="la la-pencil"></i></a>
													<a href="{{'delete/'.$info->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete a record ?')"><i class="la la-trash-o"></i></a>
												</td>												
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