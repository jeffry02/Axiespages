<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ItemController extends Controller
{
    public function index(Request $request): View
    {

        $item_id = $request->query('items_id');

        $data = Item::find($item_id);

        $items = Item::query()->where('user_id',$data->user_id)->get();

        return view('pages.details', ['data' => $data, 'items'=> $items]);

    }

    public function create(): View
    {
       $collections = Collection::query()->where('user_id', Auth::user()->id)->get();
       $categories = Category::all();

        return view('pages.create', ['collections'=>$collections, 'categories'=> $categories]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'min:5'],
            'description' => 'required',
            'price' => 'required',
            'royalties' => ['required', 'min:2'],
            'size' => 'required',
            'collection_id' => 'required',
            'item_img' => 'required',
            'category_id' => 'required'
        ]);

        $data['user_id'] = Auth::user()->id;
        $item = Item::query()->create($data);

        $item->addMediaFromRequest('item_img')->toMediaCollection('items_images');
        return back();
    }

    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(item $item)
    {
        //
    }
}
