
@extends('layouts.white_aside_layout')

@section('content')
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">Dashboard </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link"> Dashboards </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link"> Aside Dashboard </a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->

 <!-- begin:: Content -->
			<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
				<div class="row">
					<div class="col-md-12 col-md-push-2">

						<!--begin::Portlet-->
						<div class="kt-portlet">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											New Administrator
										</h3>
									</div>
								</div>

								<!--begin::Form-->
								<form class="kt-form">
									<div class="kt-portlet__body">
										<div class="kt-section kt-section--first">
											<div class="form-group">
												<label>Full Name:</label>
												<input type="text" class="form-control" id="" placeholder="Enter full name">
												<span class="form-text text-muted">validation message appear here..</span>
											</div>
											<div class="form-group">
												<label>Employee Number:</label>
												<input type="text" class="form-control" id="" placeholder="Enter valid address">
												<span class="form-text text-muted">validation message appear here..</span>
											</div>
											<div class="form-group">
												<label>Department:</label>
												<input type="text" class="form-control" id="" placeholder="Enter valid url">
												<span class="form-text text-muted">validation message appear here..</span>
											</div>
											<div class="form-group">
												<label>Position:</label>
												<input type="text" class="form-control" id="" placeholder="Enter Phone number">
												<span class="form-text text-muted">validation message appear here..</span>
											</div>

											<div class="form-group">
													<label>Address:</label>
													<input type="text" class="form-control" id="" placeholder="">
													<span class="form-text text-muted">validation message appear here..</span>
												</div>

											<div class="form-group">
												<label>Phone Number</label>
												<input type="number" class="form-control" id="" placeholder="">
												<span class="form-text text-muted">validation message appear here..</span>
											</div>
											<div class="form-group">
												<label>Email Address:</label>
												<input type="email" class="form-control" id="" placeholder="">
												<span class="form-text text-muted">validation message appear here..</span>
											</div>
											<div class="form-group">
												<label>Sex</label>
												<div></div>
												<select class="custom-select form-control" id="">
													<option value="1">Male</option>
													<option value="2">Female</option>
												</select>
												<span class="form-text text-muted">validation message appear here..</span>
											</div>
											<div class="form-group">
												<label>Role</label>
												<div></div>
												<select class="custom-select form-control" id="">
													<option value="1"></option>
													<option value="2"></option>
												</select>
												<span class="form-text text-muted">validation message appear here..</span>
											</div>
										</div>
									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<button type="reset" class="btn btn-primary">Submit</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</form>

								<!--end::Form-->
							</div>

							<!--end::Portlet-->

					
					</div>
				</div>
			</div>

			<!-- end:: Content -->



@endsection
