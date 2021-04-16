<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $contact_form_data = $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'date_from' => 'required|date|after:tomorrow',
            'time_from' => 'nullable|date_format:H:i',
            'date_to' => 'required|date|after:date_from',
            'time_to' => 'nullable|required_with:time_from|date_format:H:i',
            'how_can_we_help' => 'nullable',
            'socks' => 'nullable|boolean',
        ]);
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Contact($contact_form_data));
        return view('contact_response_message');
    }
}
