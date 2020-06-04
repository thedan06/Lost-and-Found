
<div class="form-group">
    <div class="col-sm-12">

        @if(session('message'))
            <div class="alert alert-success">
                <p>{{ session('message') }}</p>
            </div>
        @endif

        @if(session('error_message'))
            <div class="alert alert-warning">
                <p>{{ session('error_message') }}</p>
            </div>
        @endif

    </div>
</div>