<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Message;

Route::view('/','pages.welcome', ['title' => 'Golden Farm']);
Route::view('/about','pages.about', ['title' => 'Golden Farm']);
Route::view('/products','pages.products', ['title' => 'Golden Farm']);
Route::view('/contact','pages.contact', ['title' => 'Golden Farm', 'messages'=>Message::all()]);
Route::post('/contact', function(Request $request){
    // DB::table('messages')->insert([
    //     'fullName' => $request->fullName,
    //     'email' => $request->email,
    //     'phone' => $request->phone,
    //     'message' => $request->message,
    // ]);
    // Message::create($request->all());
    $message = new Message;
    $message->email = $request->email;
    $message->fullName = $request->full_name;
    $message->phone = $request->phone;
    $message->message = $request->message;
    $message->save();

    $messages = Message::all();

    return view('pages.contact')->with(['title' => 'Golden Farm', 'messages'=>$messages]);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
