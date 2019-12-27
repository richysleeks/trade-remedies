<div class="col-md-7">
    <div class="kt-portlet">
        <div class="kt-portlet__body">
            @if(count($roles) > 0)
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Created By</th>

                            {{-- @if(auth()->user()->hasAnyPermission(['edit_administrator_roles','delete_administrator_roles'])) --}}
                                <th scope="col" class="text-center">Action</th>
                            {{-- @endif --}}
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $role->display_name}}</td>
                                <td>
                                    @if($role->by)
                                        @if(auth()->user()->hasAnyPermission('read_administrator'))
                                            <a href="{{ route('others_profile', $role->by->id) }}">
                                                <span class="inline-block">
                                                    <strong> 
                                                        {{ $role->by->name }} 
                                                    </strong>
                                                </span>
                                            </a>
                                        @else
                                            {{ $role->by->name }} 
                                        @endif
                                    @else
                                        <span class="inline-block">
                                            <strong> 
                                                Default
                                            </strong>
                                        </span>
                                    @endif
                                </td>

                                {{-- @if(auth()->user()->hasAnyPermission(['edit_administrator_roles','delete_administrator_roles'])) --}}
                                    <td class="text-center">
                                        {{-- @if(auth()->user()->can('edit_administrator_roles')) --}}
                                            <a class="btn btn-primary btn-icon" href="{{ route('role.edit' , $role->id) }}" role="button"><i class="fa fa-edit"></i></a>
                                        {{-- @endif --}}

                                        {{-- @if(auth()->user()->can('delete_administrator_roles')) --}}
                                            <a type="button" href="" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#deleteModal" href="#" role="button" data-roleId="{{ $role->id }}"><i class="fa fa-trash-alt"></i></a>
                                        {{-- @endif --}}
                                    </td>
                                {{-- @endif --}}
                            </tr>
                        @endforeach
                    </tbody>
                    {{ $roles->links() }}
                </table>
            @else
                <div class="empty-state text-center my-3">
                    @include('icons.empty')
                    <p class="text-muted my-3">
                        No admin roles yet!
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>

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
                        <input type="hidden" class="form-control" id="roleId" name="_method" value="DELETE" >
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