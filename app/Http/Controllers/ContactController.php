<?php


namespace App\Http\Controllers;


use App\Models\Response;

class ContactController extends Controller
{
    public function show()
    {
        return view("contacts");
    }

    public function send_feedback(FeedbackRequest $req)
    {
        $visitor = Response::firstOrCreate(['name' => $req->input('name'),
            'phone_number' => $req->input('phone_number')]);
        $feedback = new Response();
        $feedback->status = true;
        $feedback->feedback = $req->input('response');
        $feedback->save();
    }
}
