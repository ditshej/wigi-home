<div>
    <p>Hallo Silvan</p>
    <p>
        {{ $contact_form_data['first_name'] }} {{ $contact_form_data['last_name'] }} hat auf deiner Webseite
        wigis-home.ch eine Anfrage über das Kontaktformular gestellt:
    </p>
    <ul>
        <li>Vorname: <strong>{{ $contact_form_data['first_name'] }}</strong></li>
        <li>Nachname: <strong>{{ $contact_form_data['last_name'] }}</strong></li>
        <li>E-Mail-Adresse: <strong>{{ $contact_form_data['email'] }}</strong></li>
        <li>Telefon: <strong>{{ $contact_form_data['phone'] }}</strong></li>
        <li>Aufenthaltsdauer: <strong>{{ $duration }}</strong></li>
        <li>Bemerkungen: <strong>{{ $contact_form_data['how_can_we_help'] }}</strong></li>
        <li>Mit Socken 🧦?: <strong>{{ $socks }}</strong></li>
    </ul>
</div>
