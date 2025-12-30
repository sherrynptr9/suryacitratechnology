<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mews\Captcha\Facades\Captcha; 
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // ================= KIRIM PESAN =================
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
            'captcha' => 'required|captcha',
        ], [
            'name.required'    => 'Nama lengkap wajib diisi.',
            'email.required'   => 'Email wajib diisi.',
            'email.email'      => 'Format email tidak valid.',
            'phone.required'   => 'Nomor telepon wajib diisi.',
            'message.required' => 'Pesan tidak boleh kosong.',
            'captcha.required' => 'Kode keamanan wajib diisi.',
            'captcha.captcha'  => 'Kode keamanan salah, silakan coba lagi.',
        ]);

$data = [
    'name'         => $request->name,
    'email'        => $request->email,
    'phone'        => $request->phone,
    'user_message' => $request->message 
];
        Mail::send('emails.contact', $data, function($message) use ($request) {
            $message->to('sherryn.ptr9@gmail.com', 'Admin Website')
                    ->subject('Pesan Baru dari Website: ' . $request->name);
            $message->from($request->email, $request->name);
        });


        Contact::create($request->except(['_token', 'captcha']));

        return back()->with('success', 'Terima kasih! Pesan Anda berhasil dikirim.');
    }

    // ================= RELOAD CAPTCHA =================
    public function reloadCaptcha()
    {
        return response()->json([
            'captcha' => Captcha::img('math') 
        ]);
    }
}
