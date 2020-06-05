@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Event Details</h6>
        </div>
        <div class="card-body" style="padding: 40px;">

            @include('view-helpers.flash-messages')

            @include('events.show_fields')
        </div>
    </div>
@endsection
