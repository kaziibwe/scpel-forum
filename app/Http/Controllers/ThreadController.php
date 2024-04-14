<?php


namespace App\Http\Controllers;

use App\Models\Reaction;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    // controller that stores the thread information

    public function creatingThread(Request $request){
        $store= $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "email" => "email|required",
            "subject" => "required",
            "message" => "required"
        ]);
     $store=Thread::create($store);
     return  $store ? redirect()->route("home") : redirect(url()->previous()."#error");
    }

// controller for that stores a reaction  to the thread
    public function creatingReply(Request $request){
        $thread_id=$request['thread_id'];
        $store= $request->validate([
            'thread_id' => 'required|exists:threads,id',
            'name_reacted_to'=>'required',
            "firstname" => "required",
            "lastname" => "required",
            "email" => "email|required",
            "message" => "required"
        ]);
     $store=Reaction::create($store);
     return  $store ? redirect()->route("home", ['id' => $thread_id]) : redirect(url()->previous()."#error");
    }


    // controller that  stores the reaction to the reaction
    // public function reactionReply(Request $request){
    //     $store= $request->validate([
    //         'reaction_id' => 'required|exists:reactions,id',
    //         "firstname" => "required",
    //         "lastname" => "required",
    //         "email" => "email|required",
    //         "message" => "required"
    //     ]);
    //  $store=Reaction::create($store);
    //  return  $store ? redirect()->route("home") : redirect(url()->previous()."#error");
    // }

    public function reactionReply(Request $request){
        // Validate the request data
        // dd($request->all());
        $request->validate([
            'reaction_id' => 'required|exists:reactions,id',
            'name_reacted_to'=>'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Retrieve the reaction
        $reaction = Reaction::findOrFail($request->reaction_id);

        // Extract the thread ID associated with the reaction
        $thread_id = $reaction->thread_id;

        // dd($thread_id);

        // Create a new reaction
        $newReaction = Reaction::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'message' => $request->message,
            'thread_id' => $thread_id , // Assign the thread ID to the new reaction
            'reaction_id'=>$request->reaction_id,
            'name_reacted_to'=>$request->name_reacted_to


        ]);

        // Redirect based on the success of the operation
        return $newReaction ? redirect()->route("home", ['id' => $thread_id]) : redirect()->back()->with('#error');
    }



}
