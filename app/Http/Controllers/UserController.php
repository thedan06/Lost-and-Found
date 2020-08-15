<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    const MESSAGE = 'message';
    const ERROR_MESSAGE = 'error_message';

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $users = User::paginate(15);

        return view('users.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     *
     * @return RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $inputs = $request->all();
        $inputs['created_by'] = Auth::id();

        //$inputs['is_active'] = 'yes';

        $user = User::create($inputs);

        session()->flash(self::MESSAGE, 'User has been added successfully');

        return redirect()->to(route('users.show', [$user->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     *
     * @return Factory|View
     */
    public function show(User $user)
    {
        //dd($user);
        return view('users.show', [
            'user' => $user
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
        $user = User::find($id);

        return view('users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param $id
     *
     * @return RedirectResponse
     */
    public function update(UserRequest $request, $id)
    {
        $inputs = $request->all();
        $inputs['created_by'] = Auth::id();

        User::find($id)->update($inputs);

        session()->flash(self::MESSAGE, 'User info have been updated successfully');

        return redirect()->to(route('users.show', [$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        //
    }
}
