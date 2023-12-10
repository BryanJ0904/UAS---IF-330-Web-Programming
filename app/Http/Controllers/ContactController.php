<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('kontak');
    }

    public function sendEmail(Request $request)
    {
        // Validasi formulir
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        // Kirim email
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ];

        Mail::to('tujuan@example.com')->send(new ContactMail($data));

        // Redirect dengan pesan sukses
        return redirect()->route('kontak.form')->with('success', 'Pesan berhasil dikirim!');
    }
}
