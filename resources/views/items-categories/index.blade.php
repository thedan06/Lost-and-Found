@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of items-categories</h6>

            <a class="pull-right" href="/items-categories/create">Add Item-Category</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="events_table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($itemsCategories as $category)
                        <tr>
                            {{--<th>{{ $category->id }}</th>--}}
                            <td>{{ $category->name }}</td>
                            <td>{{ eventTwix($category->active) }}</td>
                            {{--<td>{{ $category->description }}</td>--}}
                            <th class="text-center">
                                <a href="{!! route('items-categories.show', [$category->id]) !!}" data-toggle="tooltip"
                                   data-placement="top" title="View more information"><i class="fa fa-eye"></i></a>
                                &nbsp;
                                <a href="{!! route('items-categories.edit', [$category->id]) !!}" data-toggle="tooltip"
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

@php
    function eventTwix($categoryStatus) {
        if ($categoryStatus == 1) {
            return 'Active';
        }
        return 'Inactive';
    }
@endphp

@section('scripts')
    <script>

        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            /*console.log('Hello');*/
            $('#dataTable').DataTable();
        });

    </script>
@endsection
