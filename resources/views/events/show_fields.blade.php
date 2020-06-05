@php

        $fields = [
            'ID' => $event->id,
            'Name' => $event->name,
            'Active' => $event->active,
            'Description' => $event->description,
            //'Created By' => humanReadableDate($event->created_at),
            'Created At' => humanReadableDate($event->created_at),
        ];

        formGroup($fields);

        function formGroup($fields){

            foreach ($fields as $label => $value){
                $_label = str_replace(' ', '_', strtolower($label));

                echo "
                <div class='row'>
                    <label class='control-label col-sm-3' for='$_label'>$label</label>
                        <div class='col-sm-9'>
                            <p>: &nbsp; $value</p>
                        </div>
                </div>
                ";
            }
        }

        function humanReadableDate($date){
            return $date . ' (' . \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans() . ')';
        }
@endphp

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <hr>
        <a href="{!! route('events.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>

        <a href="{!! route('events.edit', [$event->id]) !!}" class="btn btn-primary"><i class="fa fa-edit"></i>
            Update</a>

    </div>
</div>
