@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Event</h6>
        </div>
        <div class="card-body">

            @include('view-helpers.flash-messages')

            {!! Form::open(['route' => 'events.store', 'id' => 'form']) !!}

            @include('events.fields')

            {!! Form::close() !!}

            @include('view-helpers.validation-errors')

        </div>
    </div>

@endsection
