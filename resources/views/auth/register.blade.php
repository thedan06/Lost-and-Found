{{--@extends('layouts.app-initial')--}}
@extends('auth.auth-main')

@section('content')

    <div class="card shadow mb-4" style="margin-top: 10%;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Self Registration</h6>
        </div>
        <div class="card-body">

            @include('view-helpers.flash-messages')

            {!! Form::open(['route' => 'client_self_registration', 'id' => 'form']) !!}


            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('first_name', 'First Name:') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('middle_name', 'Middle Name:') !!}
                    {!! Form::text('middle_name', null, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('last_name', 'Last Name:') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('gender', 'Gender:') !!}
                    {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female',], null, ['class' => 'form-control',
                    'required'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('phone_number', 'Phone Number:') !!}
                    {!! Form::text('phone_number', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('location', 'Location:') !!}
                    {!! Form::text('location', null, ['class' => 'form-control', 'required']) !!}
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

                    <a href="{!! route('clients.index') !!}" class="btn btn-warning"><i class="fa fa-times"></i> Cancel</a>
                </div>
            </div>

            {!! Form::close() !!}

            @include('view-helpers.validation-errors')

        </div>
    </div>

@endsection
