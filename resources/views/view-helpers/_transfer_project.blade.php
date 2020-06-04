<div class="row">

    <div class="form-group col-sm-12 p-4">
        <h6 class="m-0 font-weight-bold text-primary">Transfer Project</h6>
    </div>

    <div class="form-group col-sm-6 pl-4">

        {!! Form::open(['url' => '/project/transfer/'.$projects->id, 'id' => 'form', 'files' =>
        true,'enctype'=>'multipart/form-data']) !!}

        @include('view-helpers.validation-errors')

        {!! Form::label('currentstage', 'Transfer To:') !!}

        {!! Form::select('currentstage', [
            'procurement' => 'Procurement',
            'quantity_survey' => 'Quantity Survey',
            'sales_and_marketing' => 'Sales And Marketing',
            'engineering' => 'Engineering',
            'finance_and_accounting' => 'Finance And Accounting',
            'architecture' => 'Architecture',
            'administration' => 'Administration',
        ], null,
         ['class' => 'form-control', 'required'] ) !!}

        {!! Form::hidden('project_id', $projects->id, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group col-sm-6 text-center">
        <label>&nbsp;</label><br/>
        <button type="submit" class="btn btn-primary" name="btnArchTransfer" value="qs">
            <i class="fa fa-save"></i> Transfer
        </button>

        {!! Form::close() !!}
    </div>

</div>

@section('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('select').select2();
        });
    </script>

@endsection
