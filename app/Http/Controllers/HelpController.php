<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HelpController extends Controller
{
    public function index()
    {
        return view('help', [
            'title' => 'Bantuan'
        ]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'isi' => 'required|string',
        ]);

        if ($validation->fails()) {
            return response()->json(['code' => 400, 'msg'=>$validation->errors()->first()]);
        }

        $name = $request->nama;
        $email = $request->email;
        $msg = $request->isi;

        $msg = "
            Name: $name\n
            Email: $email\n
            Message: $msg
        ";

        $receiver = "ncarya24@gmail.com";
        // Mail::to($receiver)->send(new Conta)

    }
}
