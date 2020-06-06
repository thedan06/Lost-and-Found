<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventRequest;
use Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventController extends Controller
{
    const MESSAGE = 'message';
    const ERROR_MESSAGE = 'error_message';

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $events = Event::paginate(15);

        return view('events.index', [
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRequest $request
     *
     * @return RedirectResponse
     */
    public function store(EventRequest $request)
    {
        $inputs = $request->all();
        $inputs['created_by'] = Auth::id();

        //$inputs['is_active'] = 'yes';

        $event = Event::create($inputs);

        session()->flash(self::MESSAGE, 'Event has been added successfully');

        return redirect()->to(route('events.show', [$event->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     *
     * @return Factory|View
     */
    public function show(Event $event)
    {
        dd($event);
        return view('events.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     *
     * @return Factory|View
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('events.edit', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest $request
     * @param $id
     *
     * @return RedirectResponse
     */
    public function update(EventRequest $request, $id)
    {
        $inputs = $request->all();
        $inputs['created_by'] = Auth::id();

        Event::find($id)->update($inputs);

        session()->flash(self::MESSAGE, 'Event info have been updated successfully');

        return redirect()->to(route('events.show', [$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $events)
    {
        //
    }
}
