<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contactpage');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Gửi email bằng Mailable
        Mail::to('nhuyenkhanh1107xx@gmail.com')->send(new ContactMail($validated));

        return redirect()->route('contact.index')->with('success', 'Your message has been sent!');
    }

    // Hiển thị trang About Us
    public function about()
    {
        return view('pages.aboutpage');
    }

    public function insurance()
    {
        return view('pages.insuranceplan');
    }
}
