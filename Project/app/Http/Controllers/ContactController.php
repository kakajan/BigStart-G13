<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact', ['title' => 'Golden Farm', 'messages' => Message::all(), 'selectedMessage' => null]);
    }
    public function create() {

    }
    public function store(Request $request)
    {
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

        return view('pages.contact')->with(['title' => 'Golden Farm', 'messages' => $messages, 'selectedMessage' => null]);
    }
    public function  edit($id)
    {
        $message = Message::find($id);
        return view('pages.contact', ['title' => 'Golden Farm', 'messages' => Message::all(), 'selectedMessage' => $message]);
    }
    public function update($id, Request $request)
    {
        $message = Message::find($id);
        $message->fullName = $request->full_name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->save();
        return redirect('/contact');
    }
    public function destroy($id)
    {
        Message::find($id)->delete();
        return redirect('/contact');
    }
    public function show ($id) {
        return Message::find($id);
    }
}
