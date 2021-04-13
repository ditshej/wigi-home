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
