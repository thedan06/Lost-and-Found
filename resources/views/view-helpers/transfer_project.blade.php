<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('currentstage', 'Transfer To:') !!}

        {!! Form::select('currentstage', [
            'procurement' => 'Procurement',
            'quantity_survey' => 'Quantity Survey',
            'sales_and_marketing' => 'Sales',
            'engineering' => 'Engineering',
            'finance' => 'Finance',
            'architecture' => 'Architecture',
            'administration' => 'Administration',
        ], null,
         ['class' => 'form-control', 'required'] ) !!}

        {!! Form::hidden('project_id', $projects->id, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group col-sm-6">
        <label>&nbsp;</label><br/>
        <button type="submit" class="btn btn-primary" name="btnArchTransfer" value="qs">
            <i class="fa fa-save"></i> Transfer
        </button>
    </div>
</div>

@section('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('select').select2();
        });
    </script>

@endsection
