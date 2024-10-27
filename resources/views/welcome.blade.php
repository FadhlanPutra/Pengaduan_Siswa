<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            {{-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" /> --}}
            <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white pt-8">
                <div>
                    <header>
                        {{-- <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div> --}}
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <button
                                         id="loginModalButton" data-modal-target="loginModal" data-modal-toggle="loginModal" type="button"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                </button>

                                    @if (Route::has('register'))
                                        <button
                                            id="registerModalButton" data-modal-target="registerModal" data-modal-toggle="registerModal" type="button"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </button>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    {{-- <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://laravel.com/docs"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>

                                    <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                                </div>
                            </a>

                            <a
                                href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <a
                                href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>, <a href="https://vapor.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>, <a href="https://nova.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>, <a href="https://envoyer.io" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>, and <a href="https://herd.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>, <a href="https://laravel.com/docs/horizon" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </main> --}}

                    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                        <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
                          <div class="content-center justify-self-start md:col-span-7 md:text-start">
                            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl">Laporkan ke 911 sekarang!</h1>
                            <p class="mb-4 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">Stok terbatas, pesan sekarang juga ke <b>1500 600.</b></p>
                            <button id="loginModalButton" data-modal-target="loginModal" data-modal-toggle="loginModal" type="button" class="inline-block rounded-lg bg-primary-700 px-6 py-3.5 text-center font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">@if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end text-white">
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="rounded-md ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Dashboard
                                        </a>
                                    @else
                                        <a
                                             id="loginModala" data-modal-target="loginModal" data-modal-toggle="loginModal" type="button"
                                            class="rounded-md ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Log in
                                    </a>
                                    @endauth
                                </nav>
                            @endif
                        </button>
                          </div>
                          <div class="hidden md:col-span-5 md:mt-0 md:flex">
                            <img class="dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list.svg" alt="shopping illustration" />
                            <img class="hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list-dark.svg" alt="shopping illustration" />
                          </div>
                        </div>
                        <div class="mx-auto grid max-w-screen-xl grid-cols-2 gap-8 text-gray-500 dark:text-gray-400 sm:grid-cols-3 sm:gap-12 lg:grid-cols-6 px-4">
                          <a href="#" class="flex items-center md:justify-center">
                            <svg class="h-10 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 106 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_1005_171562)">
                                <path
                                  d="M92.1288 21.0435C90.3398 21.4564 85.6148 21.6858 85.6148 21.6858L85.0337 23.5513C85.0337 23.5513 87.3732 23.3525 89.0859 23.5207C89.0859 23.5207 89.6364 23.4748 89.6975 24.1324C89.7281 24.8052 89.6516 25.5086 89.6516 25.5086C89.6516 25.5086 89.6058 25.9214 89.04 26.0285C88.3825 26.1355 83.948 26.3343 83.948 26.3343L83.2293 28.7503C83.2293 28.7503 82.9694 29.3008 83.5657 29.1479C84.1162 28.995 88.7648 28.1081 89.3764 28.2304C90.0186 28.3833 90.7526 29.2702 90.5385 30.0654C90.2939 31.0287 85.6453 33.9952 82.8317 33.7964C82.8317 33.7964 81.3485 33.8882 80.1099 31.885C78.9172 29.9736 80.5228 26.3802 80.5228 26.3802C80.5228 26.3802 79.8041 24.6981 80.3393 24.0865C80.3393 24.0865 80.6451 23.8265 81.5626 23.7501L82.7094 21.3952C82.7094 21.3952 81.4097 21.4717 80.6451 20.5236C79.9417 19.6062 79.8805 19.2086 80.431 18.9639C81.0121 18.6581 86.3946 17.6947 90.0951 17.8171C90.0951 17.8171 91.3949 17.6642 92.5417 19.912C92.5417 19.912 93.0616 20.8295 92.1441 21.0435M78.1832 30.096C77.7245 31.2122 76.4553 32.3896 74.9262 31.671C73.3665 30.937 70.9046 25.9214 70.9046 25.9214C70.9046 25.9214 69.9871 24.0559 69.8036 24.1171C69.8036 24.1171 69.6048 23.7501 69.4978 25.7991C69.3449 27.8328 69.5284 31.7933 68.6873 32.4202C67.9228 33.0319 67.0053 32.7719 66.4854 32.0532C66.0572 31.3345 65.8737 29.6066 66.1184 26.5943C66.3937 23.5819 67.0818 20.3707 67.9534 19.3768C68.8708 18.3676 69.6048 19.1015 69.8801 19.3768C69.8801 19.3768 71.0575 20.4472 73.0453 23.6125L73.3818 24.1935C73.3818 24.1935 75.1861 27.2059 75.3696 27.1906C75.3696 27.1906 75.5225 27.3435 75.6449 27.2212C75.8284 27.1753 75.7672 26.1967 75.7672 26.1967C75.7672 26.1967 75.4308 22.9396 73.7487 17.4348C73.7487 17.4348 73.5041 16.7314 73.6723 16.0586C73.8252 15.4469 74.4827 15.7528 74.4827 15.7528C74.4827 15.7528 77.0211 16.9761 78.2597 21.1047C79.483 25.2333 78.6572 28.9797 78.1985 30.096M65.7361 19.4991C65.4915 19.9273 65.3844 20.5236 64.3293 20.6918C64.3293 20.6918 54.0842 21.4105 53.5796 22.1292C53.5796 22.1292 53.2432 22.5574 53.7937 22.6644C54.3747 22.7867 56.699 23.0926 57.8 23.1537C58.9927 23.1537 62.999 23.1843 64.467 24.9887C64.467 24.9887 65.308 25.845 65.2774 27.787C65.2468 29.7748 64.8951 30.4782 64.1153 31.1969C63.3048 31.8697 56.3626 34.9892 51.8823 30.2183C51.8823 30.2183 49.8332 27.9246 52.6009 26.1814C52.6009 26.1814 54.5888 24.9581 59.6808 26.3802C59.6808 26.3802 61.2099 26.9307 61.1488 27.4964C61.057 28.1081 59.8796 28.7197 58.167 28.6892C56.5155 28.6433 55.2922 27.8481 55.5369 27.9858C55.7662 28.0622 53.7478 27.0071 53.1208 27.7258C52.5092 28.3986 52.6621 28.7962 53.2738 29.2091C54.8029 30.096 60.8123 29.7748 62.6014 27.7717C62.6014 27.7717 63.3201 26.9612 62.2344 26.3037C61.164 25.6921 58.0446 25.3098 56.8366 25.2639C55.6898 25.2028 51.3929 25.2639 50.7507 24.1477C50.7507 24.1477 50.1391 23.3525 50.8119 21.1812C51.5153 18.8875 56.5155 18.0006 58.6869 17.8171C58.6869 17.8171 64.6504 17.5724 65.7667 18.7957C65.7667 18.7957 65.9196 19.071 65.7361 19.4838M48.824 32.9401C48.1053 33.4753 46.5762 33.246 46.1327 32.6343C45.7046 32.0991 45.5517 29.9889 45.6281 26.6707C45.7352 23.2761 45.781 19.1168 46.5456 18.444C47.3102 17.7865 47.7689 18.3676 48.0747 18.811C48.3806 19.2697 48.7781 19.7744 48.8393 20.8295C48.931 21.8998 49.191 27.4047 49.191 27.4047C49.191 27.4047 49.5274 32.4202 48.8393 32.9401M50.3531 15.0494C48.2429 15.7681 46.8056 15.5387 45.5823 15.0035C45.0471 15.9668 44.7259 16.2574 44.3284 16.3185C43.7167 16.3797 43.1815 15.4011 43.1051 15.0952C42.9827 14.8659 42.6922 14.453 43.0439 13.5202C41.8512 12.4498 41.7594 11.0125 41.9735 10.0491C42.2488 8.91757 44.2672 4.6666 50.3837 4.16199C50.3837 4.16199 53.3808 3.94791 53.9007 5.5382H53.9924C53.9924 5.5382 56.8978 5.5382 56.8366 8.13771C56.8366 10.7372 53.6255 13.979 50.3531 15.0952M53.075 7.64839C51.1483 7.95422 48.1818 10.5231 46.7597 12.6486C48.9463 13.0462 52.7691 12.8933 54.4818 9.43747C54.4818 9.43747 55.2922 7.26611 53.075 7.64839ZM44.6189 9.33043C44.0073 10.3244 43.9767 10.9207 44.2672 11.3183C44.9859 10.2479 46.2551 8.56587 48.1665 7.25082C46.6985 7.40373 45.4599 8.01538 44.6189 9.33043ZM96.7162 32.8331C95.3094 36.2889 94.1167 39.7906 93.4286 45.0355C93.4286 45.0355 93.2757 46.06 92.4347 45.7236C91.5936 45.4178 90.2174 44.0416 89.9116 42.0996C89.6058 39.5612 90.7373 35.2797 93.0463 30.3559C92.3735 29.2855 91.8995 27.6952 92.2817 25.4627C92.2817 25.4627 92.8934 21.3341 97.022 17.603C97.022 17.603 97.5114 17.1901 97.7866 17.3278C98.123 17.4807 97.9854 18.7957 97.7101 19.4685C97.4655 20.1108 95.6305 23.2913 95.6305 23.2913C95.6305 23.2913 94.4837 25.4627 94.8048 27.16C96.9762 23.8265 101.915 17.0678 104.973 19.2086C106.915 20.5848 106.915 25.0193 105.463 27.5882C104.316 29.6219 101.074 33.827 96.7468 32.8484M103.108 22.4503C101.976 23.6736 99.9579 25.9979 98.3677 29.1479C100.05 28.9644 101.686 28.0316 102.19 27.5576C103.001 26.8389 104.866 24.8969 104.576 22.328C104.576 22.328 104.392 20.9824 103.108 22.4503ZM34.6031 34.6375C29.19 36.2889 24.0828 35.5244 21.2998 34.7904C21.2233 35.9219 21.101 36.396 20.9175 36.5794C20.7034 36.8241 18.9296 37.8333 17.951 36.396C17.5228 35.7078 17.3087 34.4693 17.1864 33.3377C10.917 30.4935 8.01165 26.3037 7.91991 26.1508C7.76699 25.9979 6.34491 24.5146 7.76699 22.6797C9.09733 21.0282 13.5012 19.3615 17.4464 18.704C17.5993 15.3399 17.9663 12.7404 18.4403 11.5935C19.0061 10.2173 19.7248 11.4406 20.367 12.3581C20.8869 13.0462 21.208 15.9974 21.2386 18.3523C23.8075 18.2299 25.3672 18.4134 28.2267 18.9639C31.9883 19.6062 34.4961 21.5329 34.2973 23.7042C34.1138 25.845 32.1565 26.7319 31.392 26.793C30.6274 26.8542 29.4041 26.2884 29.4041 26.2884C28.5478 25.8909 29.3277 25.5239 30.3216 25.0957C31.4226 24.5605 31.1779 24.0253 31.1779 24.0253C30.7803 22.802 25.9024 21.9916 21.0551 21.9916C21.0551 24.6676 21.1621 29.102 21.2386 31.6862C24.6332 32.3285 27.1716 32.1909 27.1716 32.1909C27.1716 32.1909 39.5575 31.8392 39.9092 23.9336C40.2915 16.0127 27.5233 8.42825 18.1192 6.04281C8.73034 3.58092 3.40899 5.32412 2.95025 5.55349C2.44564 5.79815 2.90438 5.8899 2.90438 5.8899C2.90438 5.8899 3.40899 5.96636 4.32646 6.27218C5.24394 6.57801 4.50996 7.03674 4.50996 7.03674C2.90438 7.58723 1.1153 7.26611 0.763601 6.53213C0.411903 5.81344 0.99297 5.15592 1.68108 4.19257C2.32331 3.19864 3.05729 3.22922 3.05729 3.22922C14.6786 -0.822962 28.8689 6.44038 28.8689 6.44038C42.1417 13.138 44.4048 21.0129 44.1602 24.0712C43.9461 27.0836 42.784 32.1756 34.6031 34.6528M9.06675 23.7042C7.7517 24.3159 8.66918 25.2945 8.66918 25.2945C11.1464 27.9399 14.174 29.6066 17.0794 30.6464C17.4158 26.0591 17.3852 24.4229 17.3852 22.1139C12.8896 22.4197 10.2901 23.1537 9.06675 23.7042Z"
                                  fill="currentColor"
                                />
                              </g>
                            </svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 210 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M198.522 14.8868V19.2429H201.583V23.5649C201.593 23.9511 201.572 24.3676 201.505 24.7009C201.384 25.507 200.618 26.8797 198.445 26.8797C196.285 26.8797 195.533 25.507 195.402 24.7009C195.347 24.3676 195.324 23.9511 195.324 23.5649V9.91396C195.324 9.4311 195.356 8.9026 195.459 8.50258C195.607 7.77503 196.252 6.34025 198.429 6.34025C200.713 6.34025 201.283 7.85289 201.414 8.50258C201.5 8.9329 201.505 9.6547 201.505 9.6547V11.3123H209.027V10.3324C209.027 10.3324 209.061 9.30991 208.97 8.35569C208.405 2.75274 203.788 0.980072 198.495 0.980072C193.192 0.980072 188.669 2.76923 188.01 8.35569C187.951 8.86655 187.86 9.78548 187.86 10.3324V22.8898C187.86 23.4368 187.877 23.8602 187.979 24.8596C188.469 30.3084 193.192 32.2399 198.474 32.2399C203.788 32.2399 208.478 30.3084 208.977 24.8596C209.066 23.8602 209.075 23.4368 209.087 22.8898V14.8868H198.522ZM146.655 1.78356H139.101V23.8797C139.113 24.2648 139.101 24.6974 139.035 25.0146C138.877 25.7563 138.249 27.1838 136.165 27.1838C134.108 27.1838 133.462 25.7563 133.317 25.0146C133.241 24.6974 133.232 24.2648 133.241 23.8797V1.78356H125.689V23.194C125.68 23.7459 125.723 24.8735 125.756 25.1688C126.277 30.7479 130.674 32.5593 136.165 32.5593C141.666 32.5593 146.061 30.7479 146.591 25.1688C146.633 24.8735 146.688 23.7459 146.655 23.194V1.78356ZM77.2484 1.78356L73.4803 25.1312L69.7144 1.78356H57.5294L56.8831 31.6519H64.3481L64.5502 4.00188L69.6864 31.6519H77.2603L82.4011 4.00188L82.604 31.6519H90.0878L89.4197 1.78356H77.2484ZM32.1337 1.78356L26.6009 31.6519H34.6692L38.8385 4.00188L42.9078 31.6519H50.92L45.4103 1.78356H32.1337ZM173.055 25.8311L166.021 1.78356H154.937V31.3405H162.27L161.844 6.52358L169.398 31.3405H180.028V1.78356H172.648L173.055 25.8311ZM105.233 9.5569C105.1 8.96703 105.139 8.34035 105.207 8.01282C105.421 7.05668 106.063 6.01387 107.914 6.01387C109.639 6.01387 110.651 7.08928 110.651 8.70317V10.5295H118.014V8.44774C118.014 2.01214 112.245 1.00117 108.067 1.00117C102.806 1.00117 98.5093 2.73548 97.7246 7.5779C97.5171 8.8957 97.4657 10.0655 97.7959 11.5581C99.0754 17.596 109.587 19.3476 111.112 23.166C111.382 23.8893 111.305 24.8117 111.167 25.3552C110.939 26.3489 110.27 27.3484 108.288 27.3484C106.43 27.3484 105.311 26.2798 105.311 24.6694L105.309 21.8029H97.3829V24.0815C97.3829 30.6839 102.554 32.6759 108.124 32.6759C113.459 32.6759 117.865 30.853 118.572 25.9117C118.909 23.3585 118.654 21.6955 118.519 21.0692C117.284 14.8764 106.081 13.0136 105.233 9.5569ZM8.09575 9.48364C7.95116 8.88151 7.98491 8.246 8.06545 7.91463C8.26948 6.9631 8.91572 5.90188 10.7992 5.90188C12.5462 5.90188 13.5748 6.98765 13.5748 8.61457V10.4632H21.0248V8.3649C21.0248 1.86756 15.1668 0.832031 10.9438 0.832031C5.63849 0.832031 1.30348 2.59319 0.510349 7.47051C0.293273 8.8094 0.256059 9.98722 0.569784 11.4964C1.86304 17.6029 12.4783 19.3687 14.0228 23.2327C14.312 23.9511 14.2245 24.8735 14.0811 25.438C13.836 26.4421 13.1621 27.4557 11.164 27.4557C9.29811 27.4557 8.18204 26.3688 8.18204 24.7361L8.17169 21.862H0.156738V24.1459C0.156738 30.8239 5.40147 32.832 11.0148 32.832C16.4114 32.832 20.843 30.993 21.566 25.9945C21.9254 23.418 21.6557 21.7412 21.5346 21.1053C20.2739 14.8365 8.94603 12.9799 8.09575 9.48364Z"
                                fill="currentColor"
                              />
                            </svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 76 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M11.6169 0.936016C11.6169 0.988007 9.32937 7.38281 6.5219 15.1553C3.71442 22.9279 1.1409 30.1025 0.802966 31.0644L0.205078 32.832L3.61044 32.754L6.98981 32.6761L7.45772 31.5063C7.69168 30.8564 9.04342 27.1391 10.4472 23.2398C11.8509 19.3406 13.0207 16.1952 13.0467 16.2211C13.0987 16.2731 12.9167 19.5745 12.6308 23.5778C12.3708 27.581 12.1368 31.2983 12.1368 31.8182V32.806H15.4902C18.4277 32.806 18.8696 32.754 19.0256 32.3381C19.1035 32.1042 21.6511 25.0595 24.6405 16.7411C27.6559 8.39662 30.1775 1.40393 30.2555 1.19597C30.3854 0.884026 29.8655 0.832035 26.9541 0.884026L23.5227 0.962011L22.249 4.47135C21.5471 6.39499 20.2473 10.0083 19.3635 12.4778C18.5057 14.9474 17.7258 16.923 17.6738 16.845C17.5698 16.7411 18.1677 6.49897 18.5316 2.57371L18.6876 0.832035H15.1523C13.2026 0.832035 11.6169 0.884026 11.6169 0.936016Z"
                                fill="currentColor"
                              />
                              <path d="M31.5031 1.27401C31.4252 1.53396 28.9036 8.52665 25.9142 16.8191C22.9247 25.1115 20.4032 32.1042 20.3252 32.3382C20.1433 32.7801 20.4292 32.8061 24.2505 32.8061H28.3837L33.9207 17.391C36.9621 8.94257 39.5096 1.74192 39.6136 1.40398L39.7436 0.832088H35.7143C32.127 0.832088 31.6591 0.884079 31.5031 1.27401Z" fill="currentColor" />
                              <path
                                d="M40.9654 1.53396C39.9256 4.23745 29.8135 32.4422 29.8135 32.6501C29.8135 32.7281 31.6331 32.7801 33.8947 32.7541L37.9499 32.6761L40.1855 26.4373C41.4073 23.0059 42.4471 20.4324 42.4991 20.7184C42.5251 21.0043 42.3431 23.8378 42.0832 27.0092L41.6153 32.8061H45.6965H49.7517L49.9337 31.2984C50.0117 30.4925 50.3236 26.5413 50.6356 22.538L51.1815 15.2594L55.4967 8.7606C57.8622 5.17327 60.0198 1.94988 60.3057 1.53396L60.7737 0.832088H57.0564H53.3391L49.3358 6.81097C47.1262 10.1123 45.2806 12.7379 45.2286 12.7119C45.1766 12.6599 46.0864 10.0084 47.2302 6.83696C48.374 3.66556 49.3098 1.01406 49.3098 0.962065C49.3098 0.884079 47.4902 0.832088 45.2806 0.832088H41.2513L40.9654 1.53396Z"
                                fill="currentColor"
                              />
                              <path
                                d="M60.6698 3.35356C60.1499 4.7573 57.6284 11.75 55.0548 18.8986C52.4813 26.0473 50.2977 32.1042 50.2197 32.3641C50.0378 32.78 50.4277 32.806 57.1344 32.754L64.2311 32.6761L65.2189 29.9466C65.7648 28.4389 66.2847 27.0351 66.3627 26.7752C66.4667 26.4112 66.1808 26.3592 63.6852 26.3852C62.1515 26.3852 60.8777 26.2813 60.8258 26.1513C60.7738 26.0213 61.2417 24.5136 61.8656 22.7979L63.0093 19.6785L65.7388 19.6005L68.4943 19.5225L69.5601 16.5331C70.158 14.8954 70.6259 13.4137 70.6259 13.2837C70.6259 13.1537 69.4561 13.0497 68.0264 13.0497C66.5967 13.0497 65.4269 12.9977 65.4269 12.9458C65.4269 12.8938 65.7128 12.0359 66.0768 11.0741C66.4407 10.0863 66.9086 8.78654 67.1426 8.16266L67.5585 7.07086H70.5219C72.1596 7.07086 73.4854 7.04487 73.4854 6.99288C73.4854 6.94089 73.9533 5.64113 74.5252 4.05543C75.0971 2.49572 75.565 1.14397 75.565 1.014C75.565 0.910017 72.4196 0.832033 68.5723 0.832033H61.5796L60.6698 3.35356Z"
                                fill="currentColor"
                              />
                            </svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 97 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M23.3087 17.7422C23.2945 15.1203 24.4766 13.1414 26.8694 11.684C25.5306 9.76222 23.5081 8.70489 20.8376 8.49771C18.3094 8.29767 15.5463 9.97655 14.5351 9.97655C13.4668 9.97655 11.0171 8.56915 9.09427 8.56915C5.12049 8.63345 0.897461 11.7483 0.897461 18.0852C0.897461 19.9569 1.23929 21.8906 1.92295 23.8862C2.8345 26.5081 6.12462 32.9379 9.55716 32.8307C11.3518 32.7878 12.6194 31.5519 14.9552 31.5519C17.2199 31.5519 18.3949 32.8307 20.396 32.8307C23.8571 32.7807 26.8338 26.9368 27.7027 24.3077C23.0595 22.1145 23.3087 17.878 23.3087 17.7422ZM19.278 6.01154C21.2221 3.69684 21.0441 1.58931 20.9871 0.832031C19.2708 0.932049 17.284 2.00367 16.1516 3.32534C14.9054 4.73988 14.1719 6.4902 14.3285 8.46199C16.1872 8.60487 17.8822 7.64755 19.278 6.01154Z"
                                fill="currentColor"
                              />
                              <path
                                d="M38.6162 21.8529L36.7504 27.5318H34.3521L40.4587 9.48436H43.2574L49.3874 27.5318H46.9074L44.9872 21.8529H38.6162ZM44.5091 20.0302L42.7521 14.8354C42.3517 13.6567 42.0874 12.5872 41.8192 11.5412H41.7687C41.5005 12.6107 41.2089 13.7074 40.863 14.808L39.106 20.0263L44.5091 20.0302ZM51.2066 18.8008C51.2066 17.142 51.156 15.7994 51.0977 14.5699H53.2046L53.3134 16.7946H53.3639C54.324 15.2139 55.8439 14.2772 57.9507 14.2772C61.0721 14.2772 63.416 16.9274 63.416 20.8655C63.416 25.5256 60.5901 27.8245 57.5504 27.8245C55.8439 27.8245 54.3513 27.0751 53.5777 25.791H53.5272V32.832H51.2066V18.8008ZM53.5233 22.2549C53.5233 22.6062 53.5738 22.9223 53.6321 23.219C54.0597 24.8504 55.4707 25.9784 57.1539 25.9784C59.6338 25.9784 61.076 23.9449 61.076 20.9708C61.076 18.3715 59.7155 16.1546 57.2355 16.1546C55.6379 16.1546 54.1452 17.3059 53.6866 19.074C53.6049 19.3667 53.5272 19.718 53.5272 20.038L53.5233 22.2549ZM65.8416 18.8008C65.8416 17.142 65.791 15.7994 65.7327 14.5699H67.8395L67.9484 16.7946H67.9989C68.959 15.2139 70.4789 14.2772 72.5857 14.2772C75.7071 14.2772 78.051 16.9274 78.051 20.8655C78.051 25.5256 75.2251 27.8245 72.1853 27.8245C70.4789 27.8245 68.9862 27.0751 68.2127 25.791H68.1622V32.832H65.8416V18.8008ZM68.1622 22.2549C68.1622 22.6062 68.2127 22.9223 68.271 23.219C68.6986 24.8504 70.1096 25.9784 71.7927 25.9784C74.2727 25.9784 75.7148 23.9449 75.7148 20.9708C75.7148 18.3715 74.3544 16.1546 71.8744 16.1546C70.2768 16.1546 68.7841 17.3059 68.3254 19.074C68.2438 19.3667 68.1661 19.718 68.1661 20.038L68.1622 22.2549ZM80.4804 8.52032H82.8283V27.5279H80.4804V8.52032ZM87.5472 21.4782C87.5978 24.6631 89.6268 25.9784 91.9708 25.9784C93.65 25.9784 94.6645 25.6856 95.543 25.311L95.9434 26.997C95.1193 27.3717 93.7044 27.8011 91.652 27.8011C87.6794 27.8011 85.3044 25.1783 85.3044 21.2675C85.3044 17.3567 87.5978 14.2772 91.3566 14.2772C95.5702 14.2772 96.6897 17.9968 96.6897 20.3815C96.6897 20.8655 96.6392 21.2362 96.6081 21.4782H87.5472ZM94.4274 19.7921C94.4546 18.2934 93.8133 15.9633 91.1739 15.9633C88.7989 15.9633 87.761 18.1607 87.5744 19.7921H94.4274Z"
                                fill="currentColor"
                              />
                            </svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 74 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M16.3881 32.832C25.2243 32.832 32.4008 25.6767 32.4008 16.8356C32.4008 7.99401 25.2243 0.832031 16.3881 0.832031C7.5383 0.832031 0.375488 7.99401 0.375488 16.8356C0.375488 25.6767 7.5383 32.832 16.3881 32.832Z" fill="currentColor" />
                              <path d="M15.7439 9.81238V23.8517H20.2071V22.5893H17.0303V9.81238H15.7439Z" fill="white" />
                              <path d="M11.2749 13.643C12.3367 13.643 13.1926 12.7796 13.1926 11.7252C13.1926 10.67 12.3367 9.80327 11.2749 9.80327C10.213 9.80327 9.35707 10.67 9.35707 11.7252C9.35707 12.7804 10.213 13.643 11.2749 13.643Z" fill="white" />
                              <path
                                d="M17.0299 3.44376C16.8625 3.43547 16.5443 3.42511 16.3923 3.42511C9.00118 3.42511 2.98598 9.44239 2.98598 16.8289C2.98598 20.4167 4.3801 23.7796 6.90525 26.3085C9.44075 28.8316 12.8053 30.2257 16.3923 30.2257C19.9656 30.2257 23.3293 28.8316 25.8602 26.3085C28.3916 23.7796 29.7923 20.4167 29.7923 16.8289V16.2327H20.2196V17.4665H28.5155C28.5155 17.4935 28.5155 17.6244 28.5097 17.6583C28.0879 23.9731 22.8139 28.9745 16.3923 28.9745C13.1417 28.9745 10.0937 27.7105 7.79972 25.4148C5.49829 23.1287 4.23012 20.0832 4.23012 16.8285C4.23012 13.5924 5.49829 10.5312 7.79972 8.23802C10.0937 5.94695 13.1417 4.68292 16.3923 4.68292C16.5323 4.68292 16.8729 4.68292 17.0299 4.69121V3.44376Z"
                                fill="white"
                              />
                              <path
                                d="M44.4432 6.21874H39.6315V27.0488H54.4104V22.9941H44.4432V6.21874ZM64.9953 19.1109H68.9141V22.753C68.1916 23.0281 66.7826 23.3023 65.4419 23.3023C61.1112 23.3023 59.6687 21.1028 59.6687 16.6354C59.6687 12.3752 61.0425 9.86333 65.3731 9.86333C67.7798 9.86333 69.1544 10.6198 70.2871 12.0637L73.2788 9.31314C71.4567 6.70306 68.2595 5.91257 65.2704 5.91257C58.5322 5.91257 54.9929 9.58989 54.9929 16.6006C54.9929 23.5774 58.1892 27.3579 65.2364 27.3579C68.4667 27.3579 71.629 26.5335 73.3467 25.3307V15.226H64.9953V19.1109Z"
                                fill="currentColor"
                              />
                            </svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10.7367 14.5876c.895.2365 2.8528.754 3.1643-.4966.3179-1.2781-1.5795-1.7039-2.5053-1.9117-.1034-.0232-.1947-.0437-.2694-.0623l-.6025 2.4153c.0611.0152.1328.0341.2129.0553Zm.8452-3.5291c.7468.1993 2.3746.6335 2.6581-.5025.2899-1.16213-1.2929-1.5124-2.066-1.68348-.0869-.01923-.1635-.03619-.2262-.0518l-.5462 2.19058c.0517.0129.1123.0291.1803.0472Z"/>
                                <path fill="currentColor" fill-rule="evenodd" d="M9.57909 21.7008c5.35781 1.3356 10.78401-1.9244 12.11971-7.2816 1.3356-5.35745-1.9247-10.78433-7.2822-12.11995C9.06034.963624 3.6344 4.22425 2.2994 9.58206.963461 14.9389 4.22377 20.3652 9.57909 21.7008ZM14.2085 8.0526c1.3853.47719 2.3984 1.1925 2.1997 2.5231-.1441.9741-.6844 1.4456-1.4013 1.6116.9844.5128 1.485 1.2987 1.0078 2.6612-.5915 1.6919-1.9987 1.8347-3.8697 1.4807l-.454 1.8196-1.0972-.2734.4481-1.7953c-.2844-.0706-.575-.1456-.8741-.2269l-.44996 1.8038-1.09594-.2735.45407-1.8234c-.10059-.0258-.20185-.0522-.30385-.0788-.15753-.0411-.3168-.0827-.47803-.1231l-1.42812-.3559.54468-1.2563s.80844.215.7975.1991c.31063.0769.44844-.1256.50282-.2606l.71781-2.8766.11562.0288c-.04375-.0175-.08343-.0288-.11406-.0366l.51188-2.05344c.01375-.23312-.06688-.52719-.51125-.63812.01718-.01157-.79688-.19813-.79688-.19813l.29188-1.17187 1.51313.37781-.0013.00562c.2275.05657.4619.11032.7007.16469l.4497-1.80187 1.0965.27343-.4406 1.76657c.2944.06718.5906.135.8787.20687l.4375-1.755 1.0975.27344-.4493 1.8025Z" clip-rule="evenodd"/>
                              </svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-label="Ethereum" role="img" viewBox="0 0 512 512" width="75px" height="75px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><rect width="512" height="512" rx="15%" fill="#ffffff"></rect><path fill="#3C3C3B" d="m256 362v107l131-185z"></path><path fill="#343434" d="m256 41l131 218-131 78-132-78"></path><path fill="#8C8C8C" d="m256 41v158l-132 60m0 25l132 78v107"></path><path fill="#141414" d="m256 199v138l131-78"></path><path fill="#393939" d="m124 259l132-60v138"></path></g></svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg fill="#000000" width="77px" height="77px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>Xiaomi icon</title><path d="M19.96 20a.32.32 0 0 1-.32-.32V4.32a.32.32 0 0 1 .32-.32h3.71a.32.32 0 0 1 .33.32v15.36a.32.32 0 0 1-.33.32zm-6.22 0s-.3-.09-.3-.32v-9.43A2.18 2.18 0 0 0 11.24 8H4.3c-.4 0-.3.3-.3.3v11.38c0 .27-.3.32-.3.32H.33a.32.32 0 0 1-.33-.32V4.32A.32.32 0 0 1 .33 4h12.86a4.28 4.28 0 0 1 4.25 4.27l.01 11.41a.32.32 0 0 1-.32.32zm-6.9 0a.3.3 0 0 1-.3-.3v-9a.3.3 0 0 1 .3-.3h3.77a.3.3 0 0 1 .29.3v9a.3.3 0 0 1-.3.3z"></path></g></svg>
                          </a>
                          <a href="#" class="flex items-center md:justify-center">
                            <svg fill="#000000" height="75px" width="75px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-146 129 218 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M-2.9,150.4l2.8-4.2l2.8-4.1l6.2-9.3c0.8-1.1,0.5-2.7-0.7-3.4c-1.1-0.8-2.7-0.5-3.4,0.7l-6.6,9.9l-2.8,4.2l-2.8,4.2 c-9-3.5-18.9-5.4-29.5-5.4c-10.5,0-20.5,1.9-29.5,5.4l-2.8-4.2L-72,140l-6.6-9.9c-0.8-1.1-2.3-1.4-3.4-0.7 c-1.1,0.8-1.4,2.3-0.7,3.4l6.2,9.3l2.8,4.1l2.8,4.2c-21,9.8-35.3,28.3-35.3,49.6H32.5C32.4,178.7,18.2,160.2-2.9,150.4z M-66.7,180.1c-4.1,0-7.4-3.3-7.4-7.4c0-4.1,3.3-7.4,7.4-7.4c4.1,0,7.4,3.3,7.4,7.4S-62.6,180.1-66.7,180.1z M-7.3,180.1 c-4.1,0-7.4-3.3-7.4-7.4c0-4.1,3.3-7.4,7.4-7.4c4.1,0,7.4,3.3,7.4,7.4C0.2,176.8-3.1,180.1-7.3,180.1z"></path> <path d="M-105.3,209.8l-1.1,0.1v12.3v10.1v86.6c0,8.7,7,15.7,15.7,15.7h11.3c-0.4,1.3-0.6,2.7-0.6,4.1v0.8v5v25.6 c0,8.2,6.7,14.9,14.9,14.9s14.9-6.7,14.9-14.9v-25.6v-5v-0.8c0-1.4-0.2-2.8-0.6-4.1h27.6c-0.4,1.3-0.6,2.7-0.6,4.1v0.8v5v25.6 c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9v-25.6v-5v-0.8c0-1.4-0.2-2.8-0.6-4.1h11.3c8.7,0,15.7-7,15.7-15.7v-86.6v-10.1 v-12.4h-1.1H-105.3z"></path> <path d="M-131.1,209.9c-8.2,0-14.9,6.7-14.9,14.9v63.6c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9v-63.6 C-116.3,216.5-122.9,209.9-131.1,209.9z"></path> <path d="M57.2,209.9c-8.2,0-14.9,6.7-14.9,14.9v63.6c0,8.2,6.7,14.9,14.9,14.9s14.9-6.7,14.9-14.9v-63.6 C72,216.5,65.4,209.9,57.2,209.9z"></path> </g> </g></svg>
                         </a>
                         <a href="#" class="flex items-center md:justify-center">
                            <svg width="75px" height="75px" viewBox="0 -201.4 490.41 490.41" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#444444"> <path d="M40 6.91C55.75 4.5 71.53 2.23 87.31.04c.01 13.83 0 27.65.01 41.48-15.77.06-31.54.3-47.32.35-.01-11.66-.01-23.31 0-34.96zM0 12.49c11.86-1.83 23.771-3.41 35.681-4.9.01 11.47.01 22.93.02 34.4-11.9-.01-23.801.17-35.701.14V12.49zM188.42 14.42c3.12-1.99 7.11 2.16 5.29 5.28-.88 2.29-4.1 3.16-5.92 1.48-2.28-1.55-1.96-5.67.63-6.76zM270.13 14.01c2-.01 4-.01 6-.01v56h-5.979c.01-2.03-.03-4.061-.17-6.09-4.33 7.779-15.91 9.5-22.53 3.73-4.729-4.07-6.17-10.69-5.92-16.681.05-6.08 2.05-12.54 6.89-16.51 6.29-5.18 17.44-4.88 21.75 2.73-.081-7.729-.011-15.449-.041-23.169m-12.92 22.14c-4.8.76-8.05 5.14-8.949 9.67-1.181 5.46-.971 11.779 2.47 16.42 3.72 4.939 11.93 5.05 15.91.38 2.71-2.82 3.479-6.86 3.5-10.64.029-3.99.37-8.49-2.28-11.82-2.341-3.33-6.711-4.83-10.651-4.01zM447.341 16.15c.529-.07 1.59-.22 2.109-.29.03 18.04.011 36.09.011 54.14h-5.92c.039-15.02-.101-30.05.069-45.07-3.77 2.61-7.84 4.84-12.27 6.08.029-2 .05-4 .069-6 5.802-1.97 11.081-5.15 15.932-8.86zM471.33 16.13c5.2-.87 10.971 1.03 14.061 5.45 4.39 6.2 4.8 14.15 5.02 21.48-.149 7.74-1 16.129-5.939 22.44-4.55 5.97-13.87 7.37-19.971 2.98-4.949-3.57-6.89-9.801-7.77-15.57-1-8.57-.91-17.56 2.07-25.74 1.879-5.55 6.519-10.33 12.529-11.04m-.92 5.37c-5.33 2.16-6.859 8.46-7.6 13.58-.78 7.14-.96 14.5.74 21.529.85 3.461 2.64 7.131 6.069 8.65 3.891 1.96 9.091.271 11.141-3.57 3.27-5.649 3.35-12.43 3.39-18.779-.13-6.19-.38-12.85-3.8-18.23-2.03-3.28-6.4-4.6-9.94-3.18zM113.95 16.99c2.25.01 4.5.01 6.76.04 3.511 12.68 6.971 25.38 10.49 38.069a53.239 53.239 0 0 1 1.64 8.141c3.66-15.57 8.66-30.81 12.86-46.25 1.95.01 3.9.01 5.851.02 3.09 10.99 5.979 22.03 9.039 33.03 1.131 4.38 2.591 8.7 3.051 13.229 3.31-15.55 8.029-30.79 11.779-46.239 2.22-.03 4.44-.03 6.66-.03-4.84 17.69-9.88 35.33-14.779 53h-7.211c-3.55-12.689-7.069-25.391-10.659-38.06-.601-2.05-.851-4.17-1.04-6.29-.28 1.83-.54 3.68-1.011 5.47-3.63 12.92-7.31 25.819-10.84 38.76-2.399.13-4.8.14-7.2.12-5.15-17.66-10.26-35.34-15.39-53.01zM209.06 38.12c3.43-6.11 11.43-8.92 17.88-6.09 5.13 2 7.04 7.939 7.2 13 .279 8.319.05 16.649.12 24.97-2 0-4 0-6-.01-.091-7.99.21-16-.141-23.99-.16-3.96-1.84-8.72-6.149-9.73-6.29-1.9-12.57 3.77-12.771 9.99-.18 7.91-.01 15.83-.07 23.74h-6c.011-12.67.011-25.33 0-38h6.011c-.01 2.04-.02 4.08-.08 6.12zM299.47 31.06c5.35-.47 11.279.37 15.3 4.24 4.54 4.19 5.89 10.7 5.64 16.65-.07 5.35-2.05 10.78-5.97 14.51-8.18 7.44-23.37 5.81-28.561-4.42-4.079-8.57-3.26-20.43 4.19-26.94 2.671-2.26 6.051-3.29 9.401-4.04m-1.08 5.44c-8.811 2.71-10.301 14.22-7.551 21.79 2.19 6.72 10.73 9.7 16.86 6.56 4.15-1.91 6.04-6.59 6.44-10.88.449-5.01.05-10.689-3.49-14.6-2.999-3.38-8.079-4.11-12.259-2.87zM390.46 31.04c3.75-.26 7.57.1 11.101 1.48.979 1.86.22 4.3.45 6.39-4.21-2.63-10.011-4.31-14.58-1.63-3.13 1.7-3.28 6.729-.23 8.6 4.37 2.83 9.92 3.57 13.8 7.21 4.28 4.12 3.24 12.04-1.77 15.13-6.09 3.88-14.11 3.5-20.49.54 0-2.24-.01-4.479-.05-6.72 4.54 3.46 10.92 5.38 16.35 2.92 3.17-1.59 3.33-6.46.54-8.51-4.37-3.22-10.359-3.73-14.24-7.75-3.829-3.86-3.14-10.96 1.131-14.23 2.208-2.03 5.198-2.64 7.988-3.43zM187.13 32.01c2-.01 4-.01 6-.01v38h-6c0-12.67.01-25.33 0-37.99zM322.91 32h6.26c2.48 9.05 4.881 18.12 7.41 27.16.51 1.699.7 3.46.88 5.22 2.83-10.899 6.41-21.6 9.62-32.39l5.471.03c2.75 10.8 6.17 21.44 8.449 32.35 2.351-10.851 5.69-21.46 8.301-32.25 2.01-.1 4.02-.13 6.039-.15-3.81 12.671-7.46 25.38-11.289 38.03h-6.221c-2.7-10.3-6.2-20.4-8.39-30.81-2.61 10.4-6.23 20.52-9.21 30.81h-6.01c-3.76-12.67-7.6-25.311-11.31-38zM0 45.74c11.891-.04 23.78.15 35.67.13 0 11.5.03 23 .011 34.5C23.801 78.609 11.9 77.07 0 75.46V45.74zM39.93 46.2h47.38c.02 13.79 0 27.58 0 41.38-15.75-2.36-31.53-4.55-47.31-6.689-.02-11.561-.05-23.121-.07-34.691z"></path> </g> </g></svg>
                         </a>
                         <a href="#" class="flex items-center md:justify-center">
                            <svg fill="#000000" height="77px" width="77px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 304.998 304.998" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="XMLID_91_"> <path id="XMLID_92_" d="M274.659,244.888c-8.944-3.663-12.77-8.524-12.4-15.777c0.381-8.466-4.422-14.667-6.703-17.117 c1.378-5.264,5.405-23.474,0.004-39.291c-5.804-16.93-23.524-42.787-41.808-68.204c-7.485-10.438-7.839-21.784-8.248-34.922 c-0.392-12.531-0.834-26.735-7.822-42.525C190.084,9.859,174.838,0,155.851,0c-11.295,0-22.889,3.53-31.811,9.684 c-18.27,12.609-15.855,40.1-14.257,58.291c0.219,2.491,0.425,4.844,0.545,6.853c1.064,17.816,0.096,27.206-1.17,30.06 c-0.819,1.865-4.851,7.173-9.118,12.793c-4.413,5.812-9.416,12.4-13.517,18.539c-4.893,7.387-8.843,18.678-12.663,29.597 c-2.795,7.99-5.435,15.537-8.005,20.047c-4.871,8.676-3.659,16.766-2.647,20.505c-1.844,1.281-4.508,3.803-6.757,8.557 c-2.718,5.8-8.233,8.917-19.701,11.122c-5.27,1.078-8.904,3.294-10.804,6.586c-2.765,4.791-1.259,10.811,0.115,14.925 c2.03,6.048,0.765,9.876-1.535,16.826c-0.53,1.604-1.131,3.42-1.74,5.423c-0.959,3.161-0.613,6.035,1.026,8.542 c4.331,6.621,16.969,8.956,29.979,10.492c7.768,0.922,16.27,4.029,24.493,7.035c8.057,2.944,16.388,5.989,23.961,6.913 c1.151,0.145,2.291,0.218,3.39,0.218c11.434,0,16.6-7.587,18.238-10.704c4.107-0.838,18.272-3.522,32.871-3.882 c14.576-0.416,28.679,2.462,32.674,3.357c1.256,2.404,4.567,7.895,9.845,10.724c2.901,1.586,6.938,2.495,11.073,2.495 c0.001,0,0,0,0.001,0c4.416,0,12.817-1.044,19.466-8.039c6.632-7.028,23.202-16,35.302-22.551c2.7-1.462,5.226-2.83,7.441-4.065 c6.797-3.768,10.506-9.152,10.175-14.771C282.445,250.905,279.356,246.811,274.659,244.888z M124.189,243.535 c-0.846-5.96-8.513-11.871-17.392-18.715c-7.26-5.597-15.489-11.94-17.756-17.312c-4.685-11.082-0.992-30.568,5.447-40.602 c3.182-5.024,5.781-12.643,8.295-20.011c2.714-7.956,5.521-16.182,8.66-19.783c4.971-5.622,9.565-16.561,10.379-25.182 c4.655,4.444,11.876,10.083,18.547,10.083c1.027,0,2.024-0.134,2.977-0.403c4.564-1.318,11.277-5.197,17.769-8.947 c5.597-3.234,12.499-7.222,15.096-7.585c4.453,6.394,30.328,63.655,32.972,82.044c2.092,14.55-0.118,26.578-1.229,31.289 c-0.894-0.122-1.96-0.221-3.08-0.221c-7.207,0-9.115,3.934-9.612,6.283c-1.278,6.103-1.413,25.618-1.427,30.003 c-2.606,3.311-15.785,18.903-34.706,21.706c-7.707,1.12-14.904,1.688-21.39,1.688c-5.544,0-9.082-0.428-10.551-0.651l-9.508-10.879 C121.429,254.489,125.177,250.583,124.189,243.535z M136.254,64.149c-0.297,0.128-0.589,0.265-0.876,0.411 c-0.029-0.644-0.096-1.297-0.199-1.952c-1.038-5.975-5-10.312-9.419-10.312c-0.327,0-0.656,0.025-1.017,0.08 c-2.629,0.438-4.691,2.413-5.821,5.213c0.991-6.144,4.472-10.693,8.602-10.693c4.85,0,8.947,6.536,8.947,14.272 C136.471,62.143,136.4,63.113,136.254,64.149z M173.94,68.756c0.444-1.414,0.684-2.944,0.684-4.532 c0-7.014-4.45-12.509-10.131-12.509c-5.552,0-10.069,5.611-10.069,12.509c0,0.47,0.023,0.941,0.067,1.411 c-0.294-0.113-0.581-0.223-0.861-0.329c-0.639-1.935-0.962-3.954-0.962-6.015c0-8.387,5.36-15.211,11.95-15.211 c6.589,0,11.95,6.824,11.95,15.211C176.568,62.78,175.605,66.11,173.94,68.756z M169.081,85.08 c-0.095,0.424-0.297,0.612-2.531,1.774c-1.128,0.587-2.532,1.318-4.289,2.388l-1.174,0.711c-4.718,2.86-15.765,9.559-18.764,9.952 c-2.037,0.274-3.297-0.516-6.13-2.441c-0.639-0.435-1.319-0.897-2.044-1.362c-5.107-3.351-8.392-7.042-8.763-8.485 c1.665-1.287,5.792-4.508,7.905-6.415c4.289-3.988,8.605-6.668,10.741-6.668c0.113,0,0.215,0.008,0.321,0.028 c2.51,0.443,8.701,2.914,13.223,4.718c2.09,0.834,3.895,1.554,5.165,2.01C166.742,82.664,168.828,84.422,169.081,85.08z M205.028,271.45c2.257-10.181,4.857-24.031,4.436-32.196c-0.097-1.855-0.261-3.874-0.42-5.826 c-0.297-3.65-0.738-9.075-0.283-10.684c0.09-0.042,0.19-0.078,0.301-0.109c0.019,4.668,1.033,13.979,8.479,17.226 c2.219,0.968,4.755,1.458,7.537,1.458c7.459,0,15.735-3.659,19.125-7.049c1.996-1.996,3.675-4.438,4.851-6.372 c0.257,0.753,0.415,1.737,0.332,3.005c-0.443,6.885,2.903,16.019,9.271,19.385l0.927,0.487c2.268,1.19,8.292,4.353,8.389,5.853 c-0.001,0.001-0.051,0.177-0.387,0.489c-1.509,1.379-6.82,4.091-11.956,6.714c-9.111,4.652-19.438,9.925-24.076,14.803 c-6.53,6.872-13.916,11.488-18.376,11.488c-0.537,0-1.026-0.068-1.461-0.206C206.873,288.406,202.886,281.417,205.028,271.45z M39.917,245.477c-0.494-2.312-0.884-4.137-0.465-5.905c0.304-1.31,6.771-2.714,9.533-3.313c3.883-0.843,7.899-1.714,10.525-3.308 c3.551-2.151,5.474-6.118,7.17-9.618c1.228-2.531,2.496-5.148,4.005-6.007c0.085-0.05,0.215-0.108,0.463-0.108 c2.827,0,8.759,5.943,12.177,11.262c0.867,1.341,2.473,4.028,4.331,7.139c5.557,9.298,13.166,22.033,17.14,26.301 c3.581,3.837,9.378,11.214,7.952,17.541c-1.044,4.909-6.602,8.901-7.913,9.784c-0.476,0.108-1.065,0.163-1.758,0.163 c-7.606,0-22.662-6.328-30.751-9.728l-1.197-0.503c-4.517-1.894-11.891-3.087-19.022-4.241c-5.674-0.919-13.444-2.176-14.732-3.312 c-1.044-1.171,0.167-4.978,1.235-8.337c0.769-2.414,1.563-4.91,1.998-7.523C41.225,251.596,40.499,248.203,39.917,245.477z"></path> </g> </g></svg>
                         </a>


                          <a href="#" class="flex items-center md:justify-center">
                            <svg class="h-6 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 181 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M137.412 2.62108V6.17719H140.849C142.351 6.17719 143.337 7.13358 143.899 7.75176C144.349 8.26084 154.249 19.5992 154.487 19.8974C154.724 20.1956 154.724 20.199 154.724 20.3881V26.0068C154.723 26.2643 154.698 26.5212 154.648 26.7738C154.578 26.9369 154.473 27.0826 154.341 27.2007C154.21 27.3188 154.054 27.4065 153.885 27.4577C153.56 27.499 153.233 27.5196 152.906 27.5196L149.465 27.5153V31.0714H168.768V27.5153H165.135C164.81 27.5169 164.485 27.496 164.163 27.4528C163.995 27.4021 163.839 27.3146 163.708 27.1965C163.577 27.0784 163.473 26.9327 163.404 26.7695C163.353 26.517 163.327 26.2601 163.325 26.0025V20.3874C163.303 20.2028 163.349 20.0167 163.454 19.864L174.164 7.52235C175.147 6.41689 175.658 6.17647 176.947 6.17647H180.5V2.62036H164.592V6.16936H166.993C167.122 6.16155 167.25 6.19122 167.362 6.25483C167.475 6.31844 167.567 6.41331 167.627 6.5282C167.688 6.64308 167.715 6.77314 167.704 6.90291C167.694 7.03268 167.647 7.15672 167.569 7.26027C167.519 7.33298 160.909 15.1839 160.826 15.2603C160.743 15.3367 160.69 15.3183 160.628 15.2347C160.567 15.151 154.037 7.26029 154.037 7.26029C153.576 6.68938 153.936 6.16937 154.476 6.16937H156.816V2.62038L137.412 2.62108Z"
                                fill="currentColor"
                              />
                              <path d="M90.0683 2.62109V6.1772H93.1494C95.3742 6.1772 95.5259 7.42864 95.5259 8.51955V25.163C95.5259 26.1594 95.5831 27.5266 94.1647 27.5266H90.3629V31.0792H106.596V27.5266H102.636C101.055 27.5266 100.983 26.796 100.965 25.2433V10.9847L123.26 31.0792H128.93L128.631 8.38459C128.66 6.72641 128.761 6.17365 130.46 6.17365H134.013V2.62109H117.453V6.17365H121.089C122.76 6.17365 123.04 6.8246 123.062 8.38459L123.26 20.261L103.907 2.62109H90.0683Z" fill="currentColor" />
                              <path
                                d="M16.97 0.832031C13.4816 0.832031 9.518 1.49384 6.17001 3.01385C3.0452 4.42475 0.500023 6.69001 0.500023 10.4464C0.495274 12.4136 1.23591 14.308 2.57002 15.7411C3.47362 16.5848 4.93185 18.0175 8.74065 18.8612C10.4434 19.2248 14.0831 19.8102 17.7083 20.1957C21.3335 20.5811 24.8471 20.9231 26.2871 21.3122C27.4319 21.6067 29.3577 22.0068 29.3577 24.1886C29.3577 26.3704 27.3311 27.0247 26.9783 27.1666C26.6255 27.3084 24.1916 28.4357 19.8212 28.4357C16.9255 28.3545 14.0562 27.8561 11.3 26.9556C9.6692 26.3666 7.95958 25.5919 6.36478 23.6247C5.72099 22.6983 5.36373 21.5999 5.33821 20.4684H1.3782V31.6687H5.77765V30.1523C5.77693 30.0398 5.80595 29.9292 5.86167 29.8317C5.91739 29.7343 5.9978 29.6537 6.09465 29.5981C6.1915 29.5425 6.30128 29.5141 6.41266 29.5156C6.52403 29.5172 6.633 29.5487 6.7283 29.6069C8.80079 30.5178 10.9565 31.2216 13.1647 31.7084C15.4759 32.1957 16.9702 32.5487 19.843 32.5487C22.8743 32.6069 25.8954 32.176 28.7923 31.2724C30.716 30.7396 32.5209 29.8397 34.1094 28.6211C35.0028 27.9279 35.725 27.0348 36.2191 26.0121C36.7132 24.9894 36.9658 23.8649 36.9571 22.7269C36.9723 20.5648 36.1464 18.4831 34.6571 16.93C33.8289 16.1184 32.8693 15.4556 31.82 14.9705C30.692 14.4557 29.5209 14.0431 28.3206 13.7376C26.0382 13.1739 20.9122 12.4685 18.4606 12.2212C15.8902 11.9521 11.4297 11.5773 9.64767 11.021C9.10767 10.8501 8.00588 10.3232 8.00588 9.03231C8.00588 8.11231 8.50994 7.334 9.50354 6.70491C11.0839 5.7049 14.2736 5.08273 17.6 5.08273C20.8198 5.04343 24.0132 5.67344 26.9818 6.93359C27.7792 7.2847 28.5292 7.73697 29.2135 8.27948C30.3291 9.24195 31.1016 10.5472 31.4129 11.9954H34.9665V2.24681H31.0065V3.37749C31.0065 3.74112 30.6465 4.22129 29.9265 3.82493C28.1409 2.88675 23.1224 0.857484 16.97 0.832031Z"
                                fill="currentColor"
                              />
                              <path
                                d="M64.6271 0.832031C58.3883 0.832031 51.764 3.01358 48.02 6.44994C46.5927 7.7626 45.4533 9.36256 44.6752 11.1469C43.897 12.9312 43.4972 14.8603 43.5017 16.81C43.4794 18.7678 43.871 20.7079 44.6501 22.5007C45.4293 24.2935 46.5781 25.8978 48.02 27.2063C52.052 30.8681 58.1003 32.832 64.6271 32.832C71.1647 32.832 77.3423 30.89 81.2771 27.2063C82.6762 25.867 83.7924 24.2554 84.5583 22.4687C85.3242 20.6819 85.7239 18.757 85.7335 16.81C85.7528 14.865 85.3659 12.9377 84.598 11.1539C83.8302 9.37015 82.6986 7.76995 81.2771 6.45774C77.0543 2.58865 71.5283 0.832031 64.6271 0.832031ZM64.6271 4.99183C68.0399 4.99183 71.3266 6.23219 73.5406 8.43219C75.6826 10.5631 76.8017 13.574 76.8017 16.7958C76.8017 20.1704 75.7834 22.9049 73.5406 25.1595C71.2978 27.414 68.0867 28.6211 64.6271 28.6211C61.1927 28.6211 57.9128 27.3886 55.6988 25.1595C54.6399 24.0497 53.8086 22.7395 53.2526 21.3042C52.6965 19.8689 52.4268 18.3368 52.4588 16.7958C52.4588 13.5885 53.564 10.5667 55.6988 8.43219C57.9128 6.22128 61.2143 4.99183 64.6271 4.99183Z"
                                fill="currentColor"
                              />
                            </svg>
                          </a>
                        </div>
                      </section>

                    {{-- <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer> --}}
                </div>
            </div>
        </div>
    </body>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ --}}

    {{-- LOGIN MODAL --}}

    <div id="loginModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Login
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="loginModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" style="color:black;">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>



{{-- REGISTER MODAL --}}

<div id="registerModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Kasus
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="registerModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                {{-- rol --}}
                <div class="mt-4">
                    <x-input-label for="role" :value="__('Register as')" />
                    <select id="role" name="role" class="block mt-1 w-full" required>
                        <option value="siswa">Siswa</option>
                        <option value="guru">Guru</option>
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>