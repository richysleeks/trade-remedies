<div class="kt-portlet__body">
    <div class="kt-section kt-section--first">
        <div class="form-group">
            <label>Name:</label>

            <input id="submit_form" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', (isset($role)) ? $role->name : "") }}" required placeholder="Name" autofocus>

            @error('name')
                <div id="name-error" class="error invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Display Name:</label>

            <input id="display_name" type="text" class="form-control @error('display_name') is-invalid @enderror" name="display_name" value="{{ old('display_name', (isset($role)) ? $role->display_name : "") }}" required placeholder="Display Name">

            @error('display_name')
                <div id="display_name-error" class="error invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>     

        <div class="form-group">
            <label>Permissions:</label>

            <span class="d-block">
                <a href="#" class="permission-select-all"> Select all </a> / <a href="#"  class="permission-deselect-all"> Deselect all</a>
            </span>

            <ul class="permissions checkbox mt-2" style="list-style-type:none;">
                <?php
                    $role_permissions = (isset($role)) ? $role->permissions->pluck('name')->toArray() : [];
                ?>

                @foreach(\App\Permission::grouped_permissions() as $table => $permission)
                    <li>
                        <input type="checkbox" id="{{$table}}" class="permission-group">
                        <label for="{{$table}}"><strong>{{ Str::title(str_replace('_',' ', $table)) }}</strong></label>
                        <ul style="list-style-type:none;">
                            @foreach($permission as $perm)
                                <li>
                                    <input type="checkbox" id="permission-{{$perm->id}}" name="permissions[]" class="the-permission" value="{{$perm->id}}" @if(in_array($perm->name, $role_permissions)) checked @endif>
                                    <label for="permission-{{$perm->id}}">{{Str::title(str_replace('_', ' ', $perm->display_name))}}</label>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div> 

    </div>
</div>

<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</div>