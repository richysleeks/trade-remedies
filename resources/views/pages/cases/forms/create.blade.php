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
        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                <div class="row">
                    <div class="col-md-8 offset-md-1">

                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--tab">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon kt-hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                        File a Case
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">

                                <!--begin::Section-->
                                <div class="kt-section">

                                        <form class="kt-form">
                                            <div class="kt-portlet__body">
                                                   <div class="kt-section kt-section--first">
                                                        <div class="form-group">
                                                            <label>Exporter/Company Name:</label>
                                                            <input type="text" class="form-control" placeholder="Enter full name">
                                                            <span class="form-text text-muted">validation message appear here..</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address:</label>
                                                            <input type="text" class="form-control" placeholder="Enter valid address">
                                                            <span class="form-text text-muted">validation message appear here..</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Website:</label>
                                                            <input type="text" class="form-control" placeholder="Enter valid url">
                                                            <span class="form-text text-muted">validation message appear here..</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number:</label>
                                                            <input type="number" class="form-control" placeholder="Enter Phone number">
                                                            <span class="form-text text-muted">validation message appear here..</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Case Title</label>
                                                            <input type="text" class="form-control" placeholder="Case subject">
                                                            <span class="form-text text-muted">validation message appear here..</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Case Description:</label>
                                                            <textarea class="form-control" id="" rows="3"></textarea>
                                                            <span class="form-text text-muted">validation message appear here..</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Upload Support Files</label>
                                                                <div></div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
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
                                </div>
                                <!--end::Section-->
                            </div>
                        </div>

                        <!--end::Portlet-->
                    </div>
                </div>
            </div>
        <!-- end:: Content -->
    </div>
@endsection
