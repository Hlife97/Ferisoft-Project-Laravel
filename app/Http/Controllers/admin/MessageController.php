<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show()
    {
        $messages  = Contact::orderBy('created_at', 'DESC')->get();
        return view('admin.messages', compact('messages'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back();
    }
}