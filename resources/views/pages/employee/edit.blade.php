@extends('pages.layouts.layout')

@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Departments 
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="{{ route("departments.show", $department->id) }}" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i>
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route("home") }}" class="kt-subheader__breadcrumbs-link">
                        Dashboards 
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator active"></span>
                    <a class="kt-subheader__breadcrumbs-link cursor-default">
                        System
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator active"></span>
                    <a class="kt-subheader__breadcrumbs-link text-success cursor-default">
                        Departments
                    </a>
                </div>
            </div>
        </div>

        <div class="kt-content kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Update department information
                                </h3>
                            </div>
                        </div>

                        @include("pages.department.forms.edit")
                    </div>
                </div>
                
                @include("pages.department.forms.table")
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#kt_table_1').DataTable({
                paging: false,
                info: false,
                search: true
            });

            $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var department_id = button.data('departmentid') // Extract info from data-* attributes
                var modal = $(this)
                // $('#delete-form').attr('action', "departments/"+department_id);
            })
        });
    </script>
@endsection
