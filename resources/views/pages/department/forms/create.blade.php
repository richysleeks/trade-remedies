<form class="kt-form" method="POST" novalidate="novalidate" action="{{ route('departments.store') }}">
    @csrf

    <div class="kt-portlet__body">
        <div class="kt-section kt-section--first">
            <div class="form-group">
                <label>Department Name:</label>
                <input id="submit_form" required name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Department Name" autofocus>
                
                @error('name')
                    <div id="name-error" class="error invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="kt-portlet__foot">
        <div class="kt-form__actions">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>
