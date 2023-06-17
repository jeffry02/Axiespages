<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $items = \App\Models\Item::all();
    return view('pages.home', ['items'=>$items]);
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('explore',function (){
    return view('pages.explore');
});
Route::resource('collection', CollectionController::class);
Route::resource('item', ItemController::class);
Route::resource('user', UserController::class);

require __DIR__.'/auth.php';
