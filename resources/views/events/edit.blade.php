@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Event</h6>
        </div>
        <div class="card-body">

            @include('view-helpers.flash-messages')

            {!! Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'patch']) !!}

            @include('events.fields')

            {!! Form::close() !!}

            @include('view-helpers.validation-errors')

        </div>
    </div>

@endsection
