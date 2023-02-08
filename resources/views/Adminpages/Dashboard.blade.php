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
								<h4 class="card-title">Total cases</h4>
								<h3>{{$all}}</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-primary" style="width: 100%"></div>
								</div>
								<small>All Cases from UETCL</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Open Case</h4>
								<h3>{{$open}}</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-warning" style="width: 100%"></div>
								</div>
								<small>Open Cases from UETCL</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Closed Cases</h4>
								<h3>{{$closed}}</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-red" style="width: 100%"></div>
								</div>
								<small>Closed Cases from UETCL</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Court Cases</h4>
								<h3>{{$court}}</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-success" style="width: 100%"></div>
								</div>
								<small>Total officers from UETCL</small>
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
       