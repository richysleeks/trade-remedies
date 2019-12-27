@extends('pages.layouts.layout')

@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Roles 
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="{{ route("role") }}" class="kt-subheader__breadcrumbs-home">
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
                        Roles
                    </a>
                </div>
            </div>
        </div>

        <div class="kt-content kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Create new role
                                </h3>
                            </div>
                        </div>

                        <form class="kt-form" method="POST" novalidate="novalidate" action="{{ route('role.store') }}">
                            @csrf
                            
                            @include("pages.role.forms.create_edit_role")
                        </form>
                    </div>
                </div>

                @include("pages.role.forms.table")
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
                var role_id = button.data('roleid') // Extract info from data-* attributes
                var modal = $(this)

                $('#delete-form').attr('action', "role/"+role_id);
            })
        });

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            $('.permission-group').on('change', function(){
                $(this).siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);
            });

            $('.permission-select-all').on('click', function(){
                $('ul.permissions').find("input[type='checkbox']").prop('checked', true);
                return false;
            });

            $('.permission-deselect-all').on('click', function(){
                $('ul.permissions').find("input[type='checkbox']").prop('checked', false);
                return false;
            });

            function parentChecked(){
                $('.permission-group').each(function(){
                    var allChecked = true;
                    $(this).siblings('ul').find("input[type='checkbox']").each(function(){
                        if(!this.checked) allChecked = false;
                    });
                    $(this).prop('checked', allChecked);
                });
            }

            parentChecked();

            $('.the-permission').on('change', function(){
                parentChecked();
            });
        });
    </script>
@endsection
