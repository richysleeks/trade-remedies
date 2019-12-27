
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
<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Due Cases
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
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
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
												<td >tt</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Richard</td>
												<td>63629-4697</td>
												<td>Indonesia</td>
												<td>Cihaur</td>
												<td>01652 Fulton Trail</td>
												<td>6</td>
											</tr>
										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
 </div>

<!-- end:: Content -->



@endsection
