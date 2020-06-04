<?php

namespace App\Http\Controllers;

use DB;
use App\Item;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function getAllItems() {
        return DB::select('select it.id, it.item_name, ic.name as category, it.item_description, e.name as event, it.report_event_date, it.reporter_mssdn,
    it.reporter_email, rs.name as status, it.report_event_location, it.created_at from item it
    join item_category ic on ic.id=it.item_category_id
    join event e on e.id=it.report_event_id
    join report_status rs on rs.id=it.report_status_id');
    }

    public function getItem($id) {
        return DB::select('select it.id, it.item_name, ic.name as category, it.item_description, e.name as event, it.report_event_date, it.reporter_mssdn,
    it.reporter_email, rs.name as status, it.report_event_location, it.created_at from item it
    join item_category ic on ic.id=it.item_category_id
    join event e on e.id=it.report_event_id
    join report_status rs on rs.id=it.report_status_id
    where it.id=' . $id);
    }

    public function addItem(Request $request) {

        $item = new Item;
        $item->item_name = $request->item_name;
        $item->item_category_id = $request->category;
        $item->item_description = $request->item_description;
        $item->report_event_id = $request->event;
        $item->report_event_date = $request->report_event_date;
        $item->reporter_mssdn = $request->reporter_mssdn;
        $item->reporter_email = $request->reporter_email;
        $item->report_status_id = $request->status;
        $item->report_event_location = $request->report_event_location;

        $item->save();

        return response()->json(["message" => "item record created"], 201);
    }

    public function getAllIItemCategory() {
        return DB::select('select * from item_category');
    }

    public function getReportStatus() {
        return DB::select('select * from report_status');
    }

    public function getEvents() {
        return DB::select('select * from event');
    }
}
