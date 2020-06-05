@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of events</h6>

            <a class="pull-right" href="/events/create">Add Event</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="events_table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Active</th>
                        {{--<th>Description</th>--}}
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Active</th>
                        {{--<th>Description</th>--}}
                        <th style="text-align: center">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($events as $event)
                        <tr>
                            {{--<th>{{ $event->id }}</th>--}}
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->active }}</td>
                            {{--<td>{{ $event->description }}</td>--}}
                            <th class="text-center">
                                <a href="{!! route('events.show', [$event->id]) !!}" data-toggle="tooltip"
                                   data-placement="top" title="View more information"><i class="fa fa-eye"></i></a>
                                &nbsp;
                                <a href="{!! route('events.edit', [$event->id]) !!}" data-toggle="tooltip"
                                   data-placement="top" title="Update information"><i class="fa fa-edit"></i></a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            /*console.log('Hello');*/
            $('#dataTable').DataTable();
        });

    </script>
@endsection
