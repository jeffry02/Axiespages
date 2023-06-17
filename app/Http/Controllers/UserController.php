<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Array_;

class UserController extends Controller
{

    public function index(Request $request): View
    {
        $userId = $request->query('userid');
        $collectionId = $request->query('collection_id');

        $user = User::find($userId);

        if ($user == null) {
            return view('pages.home',['items'=>[]]);
        }

        $items = [];
        if($collectionId == null){
            $items = Item::query()->where('user_id',$userId)->get();
        }else{
            $items = Item::query()->where('user_id',$userId)->where('collection_id',$collectionId)->get();
        }

        $collections = Collection::query()->where('user_id',$userId )->get();

        return view('pages.user', ['items' => $items,'userId' => $userId ,'collections'=> $collections, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
