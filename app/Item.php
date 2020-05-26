<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $fillable = ['item_category_id', 'item_name','item_description', 'report_event_id','report_event_date', 'reporter_mssdn','reporter_email', 'report_status_id'.'report_event_location'];
}
