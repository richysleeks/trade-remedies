
@extends('pages.layouts.layout')

@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Dashboard 
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i>
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Dashboards 
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Aside Dashboard 
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator active"></span>
                    <a class="kt-subheader__breadcrumbs-link text-success cursor-default">
                        Active link
                    </a>
                </div>
            </div>
        </div>

		  <!-- begin:: Content -->
		  <div class="container">
				<div class="kt-content kt-grid__item kt-grid__item--fluid">
					
					<div class="row">
							<div class="kt-portlet kt-portlet--mobile">
											<div class="kt-portlet__head kt-portlet__head--lg">
												<div class="kt-portlet__head-label">
													<span class="kt-portlet__head-icon">
														<i class="kt-font-brand flaticon2-line-chart"></i>
													</span>
													<h3 class="kt-portlet__head-title">
														All Cases
													</h3>
												</div>
												<div class="kt-portlet__head-toolbar">
													<div class="kt-portlet__head-wrapper">
														<div class="kt-portlet__head-actions">
														<a href="{{route('create-case')}}" class="btn btn-brand btn-elevate btn-icon-sm">
																<i class="la la-plus"></i>
																New Record
															</a>
														</div>
													</div>
												</div>
											</div>

											<!--begin: Datatable -->
											<table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
													<thead>
															<tr>
																	<th>SN</th>
																	<th>Name</th>
																	<th>Address</th>
																	<th>Website</th>
																	<th>Phone Number</th>
																	<th>Case Title</th>
																	<th>Actions</th>
															</tr>
													</thead>
													<tbody>
															<tr>
																	<td>1</td>
																	<td>Richard</td>
																	<td>61715-075</td>
																	<td>China</td>
																	<td>Tieba</td>
																	<td>3</td>
																	<td class="text-center">
																		<a type="button" href="" class="btn btn-primary btn-icon"><i class="fa fa-edit"></i></a>

																		<a type="button" href="" class="btn btn-primary btn-icon"><i class="fa fa-eye"></i></a>
	
																		<a type="button" href="" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#deleteModal" href="#" role="button" data-associationId="{{-- {{ $association->id }} --}}"><i class="fa fa-trash-alt"></i></a>
																	</td>
															</tr>
															
													</tbody>
											</table>

												<!--end: Datatable -->
									</div>
							</div>
					</div>			
					<!--Delete modal start -->
					<div class="modal fade " id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
							<div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
											<h3 class="modal-title text-center" id="exampleModalLabel">Delete Comfirmation</h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
											<form id="delete-form" method="post" id="deleteFormId">
												{{csrf_field()}} 
												{{method_field('DELETE')}} 
												<div class="form-group">
													<input type="hidden" class="form-control" id="client_id" name="_method" value="DELETE" >
												</div>
												
												<h4 class="text-center">Are you sure you want to delete this data?</h4>

												<div class="modal-footer">
													<button type="button" class="btn btn-warning px-5" data-dismiss="modal">No</button>
													<button type="submit" class="btn btn-success px-5">Yes</button>
												</div>
											</form>
									</div>
								</div>
							</div>
					</div>
					<!--Delete modal end -->
			</div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
            
            $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var client_id = button.data('clientid') // Extract info from data-* attributes
                console.log(client_id);
                var modal = $(this)
                $('#delete-form').attr('action', "client/"+client_id);
            })

        });
    </script>
@endsection