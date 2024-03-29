require('./bootstrap');

import 'alpinejs';

import {Calendar} from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import googleCalendarPlugin from '@fullcalendar/google-calendar';
import glightbox from "glightbox/src/js/glightbox";

document.addEventListener('DOMContentLoaded', function () {
    const gallery = glightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true,
    });

    let calendarEl = document.getElementById('calendar-container');
    const calendar = new Calendar(calendarEl, {
        locale: 'de',
        plugins: [dayGridPlugin, googleCalendarPlugin],
        initialView: window.innerWidth < 768 ? 'dayGridWeek' : 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: window.innerWidth < 850 ? '' : 'dayGridDay,dayGridWeek,dayGridMonth',
        },
        footerToolbar: {
            start: window.innerWidth < 850 ? 'dayGridDay,dayGridWeek,dayGridMonth' : '',
            center: '',
            end: '',
        },
        buttonText: {
            today: 'Heute',
            month: 'Monat',
            week: 'Woche',
            day: 'Tag',
            list: 'Liste',
        },
        googleCalendarApiKey: process.env.MIX_GOOGLE_CALENDAR_API_KEY,
        events: {
            googleCalendarId: process.env.MIX_GOOGLE_CALENDAR_ID
        },
        eventClick: (arg) => {
            arg.jsEvent.preventDefault();
        }
    });
    calendar.render();
});
