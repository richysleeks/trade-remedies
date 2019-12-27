@extends('pages.layouts.layout')

@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Employees 
                </h3>

                <span class="kt-subheader__separator kt-hidden"></span>

                <div class="kt-subheader__breadcrumbs">
                    <a href="{{ route("employees.index") }}" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i>
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route("home") }}" class="kt-subheader__breadcrumbs-link">
                        Dashboards 
                    </a>

                    <span class="kt-subheader__breadcrumbs-separator active"></span>
                    <a class="kt-subheader__breadcrumbs-link text-success cursor-default">
                        Employees
                    </a>
                </div>
            </div>
        </div>

        <!-- begin:: Content -->
        <div class="container">
            <div class="kt-content kt-grid__item kt-grid__item--fluid">
                <div class="row">
                    <div class="kt-portlet kt-portlet--mobile">
                        {{-- @if(auth()->user()->can('add_administrator')) --}}
                            @if(count($admin_users) > 0)
                                <div class="kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="kt-portlet__head-wrapper">
                                            <div class="kt-portlet__head-actions">
                                                <a href="{{route('employees.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                                    <i class="la la-plus"></i>
                                                    New Employee
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        {{-- @endif --}}

                        <div class="col-md-12">
                            @if(count($admin_users) > 0)
                                <table class="table table-striped- table-bordered table-hover table-checkable mt-2" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Employee Information</th>
                                            <th>Department</th>
                                            <th>Position</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($admin_users as $employee)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img style="width: 80px; height: 80px:" class="kt-img-rounded" alt="Pic" src="{{asset('assets/media/users/300_21.jpg')}}">

                                                    <h4 class="d-inline">{{ $employee->user_info->name }}</h4>
                                                    <h6 class="text-muted">{{ $employee->user_info->email }}</h6>
                                                    <h6 class="text-muted">{{ $employee->phone }}</h6>
                                                </td>

                                                <td>{{ $employee->department_->name }}</td>
                                                <td>{{ $employee->position_->title }}</td>
                                                <td class="text-center">
                                                    <a type="button" href="" class="btn btn-primary btn-icon">
                                                        <i class="fa fa-edit">
                                                        </i>
                                                    </a>

                                                    <a type="button" href="" class="btn btn-primary btn-icon">
                                                        <i class="fa fa-eye"></i>
                                                    </a>

                                                    <a type="button" href="" class="btn btn-primary btn-icon">
                                                        <i class="fa fa-lock"></i>
                                                    </a>

                                                    <a type="button" href="" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#deleteModal" href="#" role="button" data-employeeId="{{ $employee->id }}">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="empty-state text-center my-3">
                                    @include('pages.partials.empty')
                                    <h3 class="text-muted my-3">
                                        No employees yet!
                                    </h3>

                                    {{-- @if(auth()->user()->can('add_administrator')) --}}
                                        <a href="{{route('employees.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                            <i class="la la-plus"></i>
                                            New Employee
                                        </a>
                                    {{-- @endif --}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>          

            <!--Delete modal start -->
            <div class="modal fade " id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-center" id="exampleModalLabel">
                                    Delete Comfirmation
                                </h3>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form id="delete-form" method="post" id="deleteFormId">
                                    {{csrf_field()}} 
                                    {{method_field('DELETE')}} 
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="employee_id" name="_method" value="DELETE" >
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
            $('#datatable').DataTable({
                search: true,
                paging: false,
                info: false
            });
            
            $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var employee_id = button.data('employeeid') // Extract info from data-* attributes
                console.log(employee_id);
                var modal = $(this)
                $('#delete-form').attr('action', "employees/"+employee_id);
            })

        });
    </script>
@endsection