<?php

use App\Http\Controllers\ThreadController;
use App\Http\Controllers\UserController;
use App\Models\Reaction;
use App\Models\Thread;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





// This goes to the one who will be mentaining this software in future , when the home url  eg  / starts with the get request that has  id /{id} as shown bellow, all  get requests  should be attached  with the ID if you dont do so you will never see the  page you want to go to  Error not found   e.g  the  route that goes to the create thread page , should be  /create-thread but i made it /create-thread/1 for it to work .Attaching  1  on the above request  no changes it makes in my get request but make url have   defualt id  . Make you request to have name then use the name in the button eg {{ route(creat) }} . i have faced this challange and took 4 hours to discover therefore you should not face the same challange.

// Route::get('/{id?}', function ($id = 1) {
//     $threads = Thread::latest('id')->paginate(3);
//     $thread = Thread::findOrFail($id);
//     $reactions = $thread->reactions()->get();
//     // $reactions = Reaction::with('parentReaction')->latest('id')->paginate(3);
//     // $reactions = Reaction::with('parentReaction')->latest('id');
//     // dd($reactions);

//     return view('welcome', [
//         'threads' => $threads,
//         'thread' => $thread,
//         'reactions' => $reactions

//     ]);
// })->name('home');

Route::get('/{id?}', function ($id = null) {

    if ($id === null) {
        $latestThread = Thread::latest('id')->first();
        $id = $latestThread ? $latestThread->id : null;
    }
    // Fetch the thread
    $thread = Thread::with('reactions', 'reactions.childReactions')->findOrFail($id);

    // Fetch all reactions related to the thread
    $reactionss = $thread->reactions->flatMap(function ($reaction) {
        return $reaction->childReactions;
    });

    // Merge the reactions related to the thread and the thread reactions themselves
    $allReactions = $thread->reactions->merge($reactionss);

    // Sort the reactions by their created_at timestamps
    $reactions = $allReactions->sortBy('created_at');

    // Paginate the sorted reactions
    // $paginatedReactions = $sortedReactions->paginate(10);

    // Fetch other threads for navigation
    $threads = Thread::latest('id')->paginate(40);

    return view('welcome', [
        'threads' => $threads,
        'thread' => $thread,
        'reactions' => $reactions
    ]);
})->name('home');


Route::get('/reaction/{id}',function ($id) {

    $threads = Thread::latest('id')->paginate(40);
    $thread = Thread::findOrFail($id);

    return view('reactionOfThread',[
        'threads' => $threads,
        'thread' => $thread,
    ]);

})->name('thread.reply');



Route::get('/reactions/{id}',function ($id) {
    $threads = Thread::latest('id')->paginate(40);
    $reaction = Reaction::findOrFail($id);


    return view('reactionOfReaction',[
        'threads' => $threads,
        'reaction'=>$reaction
    ]);

})->name('reaction.reply');










// Route::get('/{id?}', function ($id = null) {
//     // If $id is provided, fetch the specified thread, otherwise fetch the latest thread
//     $latestThread = $id ? Thread::findOrFail($id) : Thread::latest()->first();

//     return view('welcome', [
//         'latestThread' => $latestThread
//     ]);
// })->name('thread');

// Route::get('/thread/{id}', 'ThreadController@show')->name('thread');


Route::get('/create-thread/1', function () {
    $threads = Thread::latest('id')->paginate(40);

    return view('create-thread',[
        'threads'=>$threads

    ]);
})->name('create.thread');



// route to login page
Route::get('login-scpel/1',function(){
    return view('accounts.login');
})->name('login');


// route to register page
Route::get('register-scpel/1',function(){
    return view('accounts.register');
})->name('register');


// route to detete the thread
Route::delete('/delete-thread/{id}',[UserController::class,'deleteThread'])->name('delete.thread');

// route to detete the reaction
Route::delete('/delete-reaction/{id}',[UserController::class,'deletereaction'])->name('delete.reaction');

// Route to register
Route::post('/register-admin',[UserController::class,'store'])->name('admin.register');

//route to authenticate
Route::post('/login-admin',[UserController::class,'authenticate'])->name('admin.auth');


// route to logout
Route::post('/logout',[UserController::class,'logout'])->name('logout');

// route to create thread
Route::post('/creating-thead',[ThreadController::class,'creatingThread'])->name('creating.thread');

// replying the thread

Route::post('/creating-reply',[ThreadController::class,'creatingReply'])->name('creating.reply');

Route::post('/reactionReply',[ThreadController::class,'reactionReply'])->name('reaction.Reply');


