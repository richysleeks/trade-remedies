<form class="kt-form" method="POST" novalidate="novalidate" action="{{ route('positions.store') }}">
    @csrf

    <div class="kt-portlet__body">
        <div class="kt-section kt-section--first">
            <div class="form-group">
                <label>Position Title:</label>
                <input id="submit_form" required name="title" value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Position Title" autofocus>
                
                @error('title')
                    <div id="title-error" class="error invalid-feedback">
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
