 @extends('layouts.header_footer_navbar')
 @section('content')
         <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row">

                    <div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">All Books</h4>
								{{-- <h3>{{$all}}</h3> --}}
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-primary" style="width: 100%"></div>
								</div>
								<small>All books from Library</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Luganda Books</h4>
								{{-- <h3>{{$luganda}}</h3> --}}
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-warning" style="width: 100%"></div>
								</div>
								<small>Luganda books from Library</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Arabic Books</h4>
								{{-- <h3>{{$arabic}}</h3> --}}
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-red" style="width: 100%"></div>
								</div>
								<small>Arabic books from Library</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">English Books</h4>
								{{-- <h3>{{$english}}</h3> --}}
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-success" style="width: 100%"></div>
								</div>
								<small>English books from Library</small>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
 @endsection
       