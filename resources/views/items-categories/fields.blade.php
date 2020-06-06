<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('active', 'Status:') !!}
        {!! Form::select('active', ['1' => 'Active', '0' => 'Inactive',], null, ['class' => 'form-control',
        'required'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 2, 'cols' => 4]) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Save</button>

        <a href="{!! route('items-categories.index') !!}" class="btn btn-warning"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>

@section('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('select').select2();
        });
    </script>

@endsection
