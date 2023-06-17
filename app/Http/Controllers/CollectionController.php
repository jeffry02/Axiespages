<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CollectionController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request): RedirectResponse
    {

        $data = $request->validate([
            'name' => ['required', 'min:5'],
        ]);

        $data['user_id'] = Auth::user()->id;

        Collection::query()->create($data);

        return back();
    }

    public function show(collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(collection $collection)
    {
        //
    }
}
