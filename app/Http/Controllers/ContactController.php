<?php


namespace App\Http\Controllers;


use App\Http\Requests\FeedbackRequest;
use App\Models\Response;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view("contacts");
    }

    public function send_feedback(Request $req)
    {
        $feedback = new Response();
        $feedback->response = $req->input('notes');
        $feedback->user_name = $req->input('name');
        $feedback->user_phone = $req->input('phone_number');
        $feedback->save();
        return redirect()->route('show');
    }
}
