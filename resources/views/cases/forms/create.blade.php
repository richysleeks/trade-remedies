
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
					<div class="col-md-8">

						<!--begin::Portlet-->
						<div class="kt-portlet">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											File New Case
										</h3>
									</div>
								</div>

								<!--begin::Form-->
								<form class="kt-form">
									<div class="kt-portlet__body">
										<div class="kt-section kt-section--first">
											<div class="form-group validated">
												<label>Exporter/Company Name:</label>
												<input type="text" class="form-control" placeholder="Enter full name">
												<div class="invalid-feedback">validation message appear here...</div>
											</div>
											<div class="form-group validated">
												<label>Address:</label>
												<input type="text" class="form-control" placeholder="Enter valid address">
												<div class="invalid-feedback">validation message appear here...</div>
											</div>
											<div class="form-group validated">
												<label>Website:</label>
												<input type="url" class="form-control" placeholder="Enter valid url">
												<div class="invalid-feedback">validation message appear here...</div>
											</div>
											<div class="form-group validated">
												<label>Phone Number:</label>
												<input type="number" class="form-control" placeholder="Enter Phone number">
												<div class="invalid-feedback">validation message appear here...</div>
											</div>
											<div class="form-group validated">
												<label>Case Title</label>
												<input type="text" class="form-control" placeholder="Case subject">
												<div class="invalid-feedback">validation message appear here...</div>
											</div>
											<div class="form-group validated">
												<label>Case Description:</label>
												<textarea class="form-control" id="" rows="3" placeholder="write full case description"></textarea>
												<div class="invalid-feedback">validation message appear here...</div>
											</div>
											<div class="form-group validated">
												<label>Upload Support Documents</label>
												<div></div>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
												<span class="form-text text-muted">If support document is more than one please zip and upload</span>
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
