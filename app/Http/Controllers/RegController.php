<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegController extends Controller
{
    public function ragist(Request $req)
    {
        $user = new User();
        $user->name = $req->input('reg_name');
        $user->email = $req->input('reg_email');
        $user->password = $req->input('reg_password');
        $sub = $req->input('repeatPassword');
        $data = User::all();
        $chack = 0;

        foreach ($data as $mail)
        {
            if($mail->email == $user->email)
            { $chack = 1;}
        }

        if ($user->password == $sub and $chack != 1)
            {
                $user->save();
                $user->response()->create([
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                    'user_phone' => $req->input('phoneNumber'),
                    'feedback' => 'null'
                ]);
            }

        return redirect()->route('show');
    }


    public function logun(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $user = User::where('email', 'LIKE', "%$email%")->get();
        if($user[0]["password"] == $password)
        {
            return redirect("/?name={$user[0]["name"]}");
        }
        return redirect()->route('show');
    }
}


