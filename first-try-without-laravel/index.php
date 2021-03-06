<?php

require_once 'Config.php';

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>🏠 wigi house 🏠</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
  <!--  <link rel="stylesheet" href="css/normalize.css">-->
  <!--  <link rel="stylesheet" href="css/html5boilerplateDefaults.css">-->
  <link rel="stylesheet" href="dist/main.css">

  <meta name="theme-color" content="#fafafa">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <link href='/node_modules/fullcalendar/main.css' rel='stylesheet'/>
  <script src='/node_modules/fullcalendar/main.js'></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var calendarEl = document.getElementById('calendar-container');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        googleCalendarApiKey: '<?= Config::GOOGLE_CALENDAR_API_KEY ?>',
        events: {
          googleCalendarId: '<?= Config::GOOGLE_CALENDAR_ID ?>'
        }
      });
      calendar.render();
    });
  </script>
</head>

<body class="text-center bg-gradient-to-br from-orange-300 to-amber-700">

<header class="relative overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div
      x-data="{ isOpen: false }"
      class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-xl lg:w-full lg:pb-28 xl:pb-32">


      <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">

          <!-- logo section -->
          <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full md:w-auto">

              <!-- logo -->
              <a href="#">
                <span class="sr-only">wigi house</span>
                <span class="text-4xl">🏠</span>
              </a>

              <!-- hamburger -->
              <div class="-mr-2 flex items-center md:hidden">
                <button
                  @click="isOpen = !isOpen"
                  type="button"
                  class="bg-cyan-700 rounded-md p-2 inline-flex items-center justify-center
                    text-orange-300 hover:text-cyan-700 hover:bg-orange-300
                    focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500"
                  id="main-menu" aria-haspopup="true">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: outline/menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <!-- desktop nav -->
          <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
            <a href="#calendar" class="font-medium text-cyan-700 hover:text-orange-50">📆 Kalender</a>
            <a href="#contact" class="font-medium text-cyan-700 hover:text-orange-50">👨‍🏭 Kontakt</a>
            <a href="#gallery" class="font-medium text-cyan-700 hover:text-orange-50">🖼️ Bilder</a>
          </div>
        </nav>
      </div>

      <!-- mobile nav-->
      <div
        x-show="isOpen"
        x-transition:enter="duration-150 ease-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div
          class="rounded-lg shadow-md bg-gradient-to-br from-orange-300 to-amber-700
            ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="px-5 pt-4 flex items-center justify-between">

            <!-- logo-->
            <div>
              <span class="text-4xl">🏠</span>
            </div>

            <!-- mobile nav close button-->
            <div class="-mr-2">
              <button
                @click="isOpen = !isOpen"
                type="button"
                class="bg-cyan-700 rounded-md p-2 inline-flex items-center justify-center
                  text-orange-300 hover:text-cyan-700 hover:bg-orange-300
                  focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500">
                <span class="sr-only">Close main menu</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </button>
            </div>
          </div>

          <!-- mobile nav menu items -->
          <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
            <div class="px-2 pt-2 pb-3 space-y-1" role="none">
              <a href="#calendar"
                 class="block px-3 py-2 rounded-md text-base font-medium
                  text-cyan-700 hover:text-orange-300 hover:bg-cyan-700"
                 role="menuitem">📆 Kalender</a>

              <a href="#contact"
                 class="block px-3 py-2 rounded-md text-base font-medium
                  text-cyan-700 hover:text-orange-300 hover:bg-cyan-700"
                 role="menuitem">👨‍🏭 Kontakt</a>

              <a href="#gallery"
                 class="block px-3 py-2 rounded-md text-base font-medium
                  text-cyan-700 hover:text-orange-300 hover:bg-cyan-700"
                 role="menuitem">🖼️ Bilder</a>
            </div>
          </div>
        </div>
      </div>

      <!-- hero section-->
      <section class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">🏠 wigi house 🏠</span>
            <span class="mt-2.5 block text-cyan-700 xl:inline">miete dir eine Berghütte 😉</span>
          </h1>
          <p class="mt-3 text-base sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Möchtest du gerne ein entspannte Zeit in einer gemütlichen Hütte verbringen?
          </p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="#contact"
                 class="w-full flex items-center justify-center px-8 py-3 border border-transparent
                  text-base font-medium rounded-md text-orange-50 bg-cyan-700
                  hover:bg-orange-300 hover:text-cyan-700 md:py-4 md:text-lg md:px-10">
                da kann ich dir weiterhelfen 🙂
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
         src="https://source.unsplash.com/m0OWqF9lCeE/1600x900" alt="a house picture">
  </div>

</header>

<main>

  <section id="about">
    <div class="pt-16 lg:pt-0 lg:pb-24">
      <div class="lg:bg-cyan-700 lg:pb-0 lg:z-10 lg:relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
          <div class="relative lg:-my-8">
            <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-1/2  bg-cyan-700 lg:hidden"></div>
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
              <div
                class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                <img class="object-cover lg:h-full lg:w-full" src="img/silvan-with-gebrill.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="pt-12 pb-16 lg:m-0 lg:col-span-2 lg:pl-8 bg-cyan-700">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
              <blockquote>
                <div>
                  <svg class="h-12 w-12 text-orange-50 opacity-25" fill="currentColor" viewBox="0 0 32 32"
                       aria-hidden="true">
                    <path
                      d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                  </svg>
                  <p class="mt-6 text-2xl font-medium text-orange-50">
                    Meine Berghütte hat viel mit deinen Socken 🧦 zu tun.
                    Du wirst im Winter genug warme 🧦 einpacken müssen.
                    Und im Sommer wirst du deine 🧦 zuhause lassen können.
                    Aber auf jeden Fall wird die Berghütte dich aus deinen 🧦 hauen.
                  </p>
                </div>
                <footer class="mt-6">
                  <p class="text-base font-medium text-orange-50">Silvan Wigert</p>
                  <p class="text-base font-medium text-cyan-100">trägt grundsätzlich gerne 🧦</p>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="calendar">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <div class="bg-cyan-700 text-orange-50 rounded-lg shadow-xl overflow-hidden">
        <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 xl:py-20 xl:px-20">
          <div id="calendar-container"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="relative">
      <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img class="h-56 w-full object-cover lg:absolute lg:h-full"
               src="https://source.unsplash.com/VhxaQOcVeoE/1600x900" alt="another house picture">
        </div>
      </div>
      <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
        <div class="lg:pr-8">
          <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-cyan-700">
              Hesch lust becho? 😍
            </h2>
            <p class="mt-4 text-lg sm:mt-3">
              Interessiert dich meine Hütte 🏠?
              Gerne kannst du dich über diese Formular bei mir melden.
            </p>
            <form action="form.php" method="POST" id="contact-form"
                  class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-10 sm:gap-x-8">
              <div class="sm:col-span-5">
                <label for="first_name" class="block text-sm font-medium text-cyan-700">Vorname</label>
                <div class="mt-1">
                  <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-5">
                <label for="last_name" class="block text-sm font-medium text-cyan-700">Nachname</label>
                <div class="mt-1">
                  <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-10">
                <div class="flex justify-between">
                  <label for="email" class="block text-sm font-medium text-cyan-700">Email</label>
                  <span class="text-sm">✉️</span>
                </div>
                <div class="mt-1">
                  <input id="email" name="email" type="email" autocomplete="email"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-10">
                <div class="flex justify-between">
                  <label for="phone" class="block text-sm font-medium text-cyan-700">Telefon</label>
                  <span class="text-sm">📱</span>
                </div>
                <div class="mt-1">
                  <input type="text" name="phone" id="phone" autocomplete="tel"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="date_from" class="block text-sm font-medium text-cyan-700">Von...</label>
                <div class="mt-1">
                  <input type="date" name="date_from" id="date_from" autocomplete="given-name"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="time_from" class="block text-sm font-medium text-cyan-700">...um ca. ...</label>
                <div class="mt-1">
                  <input type="time" name="time_from" id="time_from" autocomplete="given-name"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="date_to" class="block text-sm font-medium text-cyan-700">... bis ...</label>
                <div class="mt-1">
                  <input type="date" name="date_to" id="date_to" autocomplete="family-name"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="time_to" class="block text-sm font-medium text-cyan-700">...um ca. ...</label>
                <div class="mt-1">
                  <input type="time" name="time_to" id="time_to" autocomplete="given-name"
                         class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-10">
                <div class="flex justify-between">
                  <label for="how_can_we_help" class="block text-sm font-medium text-cyan-700">Ist noch was? 🙃</label>
                  <span id="how_can_we_help_description" class="text-sm text-gray-500">Max. 500 Zeichen</span>
                </div>
                <div class="mt-1">
                  <textarea id="how_can_we_help" name="how_can_we_help" aria-describedby="how_can_we_help_description"
                            rows="4"
                            class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                              focus:border-cyan-500 border-gray-300 rounded-md"></textarea>
                </div>
              </div>
              <fieldset class="sm:col-span-10">
                <legend class="block text-sm font-medium text-cyan-700">
                  Mit Socken 🧦?
                </legend>
                <div class="mt-4 grid grid-cols-1 gap-y-4">
                  <div class="flex items-center">
                    <input id="budget_under_25k" name="budget" value="under_25k" type="radio"
                           class="focus:ring-cyan-500 h-4 w-4 text-cyan-600 border-gray-300">
                    <label for="budget_under_25k" class="ml-3">
                      <span class="block text-sm text-cyan-700">Jop</span>
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input id="budget_25k-50k" name="budget" value="25k-50k" type="radio"
                           class="focus:ring-cyan-500 h-4 w-4 text-cyan-600 border-gray-300">
                    <label for="budget_25k-50k" class="ml-3">
                      <span class="block text-sm text-cyan-700">Ne</span>
                    </label>
                  </div>
                </div>
              </fieldset>
              <div class="text-center sm:col-span-10">
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent
                          shadow-sm text-sm font-medium rounded-md text-orange-50 hover:text-cyan-700
                          bg-cyan-600 hover:bg-orange-50
                          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                  Absenden 📬
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <li class="rounded-xl shadow group bg-gradient-to-br overflow-hidden hover:shadow-xl">
          <img class="object-cover lg:h-full lg:w-full" src="https://source.unsplash.com/i96EPuuuzSo/1600x900"
               alt="placeholder"/>
        </li>
        <li class="rounded-xl shadow group bg-gradient-to-br overflow-hidden hover:shadow-xl">
          <img class="object-cover lg:h-full lg:w-full" src="https://source.unsplash.com/j2X6eIActf4/1600x900"
               alt="placeholder"/>
        </li>
        <li class="rounded-xl shadow group bg-gradient-to-br overflow-hidden hover:shadow-xl">
          <img class="object-cover lg:h-full lg:w-full" src="https://source.unsplash.com/1P6whXqXNBc/1600x900"
               alt="placeholder"/>
        </li>
        <li class="rounded-xl shadow group bg-gradient-to-br overflow-hidden hover:shadow-xl">
          <img class="object-cover lg:h-full lg:w-full" src="https://source.unsplash.com/O--XbrLh3g0/1600x900"
               alt="placeholder"/>
        </li>
        <li class="rounded-xl shadow group bg-gradient-to-br overflow-hidden hover:shadow-xl">
          <img class="object-cover lg:h-full lg:w-full" src="https://source.unsplash.com/Bw-Hm2ya8aA/1600x900"
               alt="placeholder"/>
        </li>
      </ul>
    </div>
  </section>
</main>

<footer>
  <address>
    by Silvan Wigert 🦸‍
  </address>
</footer>

<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () {
    ga.q.push(arguments);
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview');
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
