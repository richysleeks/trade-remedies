<form class="kt-form" method="POST" novalidate="novalidate" action="{{ route('positions.update', $position->id) }}">
    @csrf
    {{method_field('PUT')}}  

    <div class="kt-portlet__body">
        <div class="kt-section kt-section--first">
            <div class="form-group">
                <label>Position Title:</label>
                <input id="submit_form" required name="title" value="{{ old('title', $position->title) }}" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Position Title" autofocus>
                
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
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route("positions.index") }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>
