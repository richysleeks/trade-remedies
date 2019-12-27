<div class="col-md-7">
    <div class="kt-portlet">
        <div class="kt-portlet__body">
            @if(count($positions) > 0)
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Created By</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($positions as $position)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $position->title }}</td>
                                <td>
                                    @if($position->by)
                                        {{ $position->by->name }}
                                    @else
                                        Default
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a type="button" href="{{ route("positions.show", $position->id) }}" class="btn btn-primary btn-icon"><i class="fa fa-edit"></i></a>

                                    <a type="button" href="" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#deleteModal" href="#" role="button" data-positionId="{{ $position->id }}"><i class="fa fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{ $positions->links() }}
                </table>
            @else
                <div class="empty-state text-center my-3">
                    @include('partials.empty')
                    <p class="text-muted my-3">
                        No positions yet!
                    </p>
                </div>
            @endif
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
                        <input type="hidden" class="form-control" id="positionid" name="_method" value="DELETE" >
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