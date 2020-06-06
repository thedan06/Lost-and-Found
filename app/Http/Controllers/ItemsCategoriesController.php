<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\ItemsCategoriesRequest;
use App\ItemCategory;
use Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ItemsCategoriesController extends Controller
{
    const MESSAGE = 'message';
    const ERROR_MESSAGE = 'error_message';

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $itemsCategories = ItemCategory::paginate(15);

        return view('items-categories.index', [
            'itemsCategories' => $itemsCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ItemsCategoriesRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ItemsCategoriesRequest $request)
    {
        $inputs = $request->all();
        $inputs['created_by'] = Auth::id();

        $itemCategory = ItemCategory::create($inputs);

        session()->flash(self::MESSAGE, 'ItemCategory has been added successfully');

        return redirect()->to(route('items-categories.show', [$itemCategory->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param ItemCategory $item_category
     *
     * @return Factory|View
     */
    public function show(ItemCategory $item_category, $id)
    {
        //dd($item_category);
        $itemCategory = ItemCategory::findOrFail($id);
        return view('items-categories.show', [
            'itemCategory' => $itemCategory
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
        $itemCategory = ItemCategory::find($id);

        return view('items-categories.edit', [
            'itemCategory' => $itemCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ItemsCategoriesRequest $request
     * @param $id
     *
     * @return RedirectResponse
     */
    public function update(ItemsCategoriesRequest $request, $id)
    {
        $inputs = $request->all();
        $inputs['created_by'] = Auth::id();

        ItemCategory::find($id)->update($inputs);

        session()->flash(self::MESSAGE, 'ItemCategory info have been updated successfully');

        return redirect()->to(route('items-categories.show', [$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ItemCategory $itemsCategories
     *
     * @return void
     */
    public function destroy(ItemCategory $itemsCategories)
    {
        //
    }
}
