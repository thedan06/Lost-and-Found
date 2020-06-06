@php

        $fields = [
            'ID' => $itemCategory->id,
            'Name' => $itemCategory->name,
            'Status' => categoryTwix($itemCategory->active),
            'Description' => $itemCategory->description,
            //'Created By' => humanReadableDate($itemCategory->created_at),
            'Created At' => humanReadableDate($itemCategory->created_at),
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

        function categoryTwix($itemCategoryStatus) {
            if ($itemCategoryStatus == 1) {
                return 'Active';
            }
            return 'Inactive';
        }
@endphp

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <hr>
        <a href="{!! route('items-categories.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>

        <a href="{!! route('items-categories.edit', [$itemCategory->id]) !!}" class="btn btn-primary"><i class="fa fa-edit"></i>
            Update</a>

    </div>
</div>
