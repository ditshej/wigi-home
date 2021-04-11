require('./bootstrap');

import 'alpinejs';

import {Calendar} from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import googleCalendarPlugin from '@fullcalendar/google-calendar';

document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('calendar-container');
    let calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, googleCalendarPlugin],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: ''
        },
        googleCalendarApiKey: process.env.MIX_GOOGLE_CALENDAR_API_KEY,
        events: {
            googleCalendarId: process.env.MIX_GOOGLE_CALENDAR_ID
        }
    });

    calendar.render();
});
