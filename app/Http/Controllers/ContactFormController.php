<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'date_from' => 'required|date|after:tomorrow',
            'time_from' => 'nullable|date_format:H:i',
            'date_to' => 'required|date|after:date_from',
            'time_to' => 'nullable|required_with:time_from|date_format:H:i|different:time_from',
            'how_can_we_help' => 'nullable',
            'socks' => 'nullable|boolean',
        ]);

        // TODO[rw]: send mail (15.04.21 rw)


        return view('contact_response_message');
    }
}
