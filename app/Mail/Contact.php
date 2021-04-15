<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class Contact extends Mailable
{
    public array $contact_form_data;

    public function __construct(array $contact_form_data)
    {
        $this->contact_form_data = $contact_form_data;
    }

    public function build(): self
    {
        $duration = date('d.m.Y H:i', strtotime($this->contact_form_data['date_from'] . ' ' . $this->contact_form_data['time_from']))
            . ' bis ' . date('d.m.Y H:i', strtotime($this->contact_form_data['date_to'] . ' ' . $this->contact_form_data['time_to']));
        return $this->from($this->contact_form_data['email'])
            ->view('emails.contact')->with([
                'duration' => $duration,
                'socks' => $this->contact_form_data['socks'] ? 'Ja, 🧦' : 'Nein, keine 🧦',
            ]);
    }
}
