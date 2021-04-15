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

                    <form action="/contact" method="POST" id="contact-form"
                          class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-10 sm:gap-x-8">
                        @csrf
                        <div class="sm:col-span-5">
                            <label for="first_name" class="block text-sm font-medium text-cyan-700">Vorname</label>
                            <div class="mt-1">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('first_name') }}">
                            </div>
                            @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-5">
                            <label for="last_name" class="block text-sm font-medium text-cyan-700">Nachname</label>
                            <div class="mt-1">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('last_name') }}">
                            </div>
                            @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-10">
                            <div class="flex justify-between">
                                <label for="email" class="block text-sm font-medium text-cyan-700">Email</label>
                                <span class="text-sm">✉️</span>
                            </div>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-10">
                            <div class="flex justify-between">
                                <label for="phone" class="block text-sm font-medium text-cyan-700">Telefon</label>
                                <span class="text-sm">📱</span>
                            </div>
                            <div class="mt-1">
                                <input type="text" name="phone" id="phone" autocomplete="tel"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('phone') }}">
                            </div>
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-3">
                            <label for="date_from" class="block text-sm font-medium text-cyan-700">Von...</label>
                            <div class="mt-1">
                                <input type="date" name="date_from" id="date_from" autocomplete="given-name"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('date_from') }}">
                            </div>
                            @error('date_from')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="time_from" class="block text-sm font-medium text-cyan-700">...um ca. ...</label>
                            <div class="mt-1">
                                <input type="time" name="time_from" id="time_from" autocomplete="given-name"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('time_from') }}">
                            </div>
                            @error('time_from')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-3">
                            <label for="date_to" class="block text-sm font-medium text-cyan-700">... bis ...</label>
                            <div class="mt-1">
                                <input type="date" name="date_to" id="date_to" autocomplete="family-name"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('date_to') }}">
                            </div>
                            @error('date_to')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="time_to" class="block text-sm font-medium text-cyan-700">...um ca. ...</label>
                            <div class="mt-1">
                                <input type="time" name="time_to" id="time_to" autocomplete="given-name"
                                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                          focus:border-cyan-500 border-gray-300 rounded-md"
                                       value="{{ old('time_to') }}">
                            </div>
                            @error('time_to')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-10">
                            <div class="flex justify-between">
                                <label for="how_can_we_help" class="block text-sm font-medium text-cyan-700">Ist noch
                                    was? 🙃</label>
                                <span id="how_can_we_help_description"
                                      class="text-sm text-gray-500">Max. 500 Zeichen</span>
                            </div>
                            <div class="mt-1">
                                <textarea id="how_can_we_help" name="how_can_we_help"
                                          aria-describedby="how_can_we_help_description"
                                          rows="4"
                                          class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500
                                      focus:border-cyan-500 border-gray-300 rounded-md">
                                {{ old('how_can_we_help') }}
                                </textarea>
                            </div>
                        </div>
                        <fieldset class="sm:col-span-10">
                            <legend class="block text-sm font-medium text-cyan-700">
                                Mit Socken 🧦?
                            </legend>
                            <div class="mt-4 grid grid-cols-1 gap-y-4">
                                <div class="flex items-center">
                                    <input id="socks_yes" name="socks" value="1" type="radio"
                                           class="focus:ring-cyan-500 h-4 w-4 text-cyan-600 border-gray-300">
                                    <label for="socks_yes" class="ml-3">
                                        <span class="block text-sm text-cyan-700">Jop</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="socks_no" name="socks" value="0" type="radio"
                                           class="focus:ring-cyan-500 h-4 w-4 text-cyan-600 border-gray-300">
                                    <label for="socks_no" class="ml-3">
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
