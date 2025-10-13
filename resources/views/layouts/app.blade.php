<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Letselschadetest - Direct en eenvoudig uw letselschade claimen. Gratis advies voor verkeersongevallen, bedrijfsongevallen, ongevallen door dieren en gebreken in het wegdek.">
    <title>@yield('title', 'Letselschadetest - Direct uw letselschade claimen')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10859171119"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-10859171119');
    </script>

</head>
<body class="antialiased bg-gray-50">
    <header class="bg-gray-900 border-b border-gray-800 sticky top-0 z-50">
        <!-- Top bar with logo and phone -->
        <nav class="mx-auto max-w-7xl px-4 lg:px-8" aria-label="Global">
            <!-- Mobile header -->
            <div class="flex items-center justify-between py-2 sm:hidden">
                <div class="w-20">
                    <a href="/" class="block">
                        <img class="h-6 w-auto" src="{{ asset('images/logo.png') }}" alt="Letselschadetest">
                    </a>
                </div>
                <div class="flex-1 text-center">
                    <span class="text-base font-heading font-bold text-white">
                        Letselschadetest
                    </span>
                </div>
                <div class="w-20 flex justify-end">
                    <button type="button" class="mr-2 -my-1 text-gray-300 hover:text-white" onclick="toggleMobileMenu()">
                        <span class="sr-only">Open menu</span>
                        <svg id="menuIcon" class="h-5 w-5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                    <a href="tel:088-0767676" class="group flex items-center text-sm font-semibold text-gray-300 hover:text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Desktop header -->
            <div class="hidden sm:flex sm:items-center sm:justify-between sm:py-2">
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Letselschadetest">
                        <div class="flex items-center ml-3">
                            <div class="h-6 border-l border-gray-700"></div>
                            <span class="ml-3 text-xl font-heading font-bold text-white">
                                Letselschadetest
                            </span>
                        </div>
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="tel:088-0767676" class="group flex items-center text-sm font-semibold text-gray-300 hover:text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="ml-2">088-0767676</span>
                    </a>
                </div>
            </div>

            <!-- Navigation Menu -->
            <div class="hidden sm:block border-t border-gray-800">
                <div class="flex justify-between items-center py-2">
                    <a href="{{ route('form') }}" class="text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 px-4 py-1.5 rounded-md transition duration-200">Meld uw letselschade</a>
                    <div class="flex space-x-8">
                        <a href="{{ route('verkeersongeval') }}" class="text-sm font-medium text-gray-300 hover:text-white">Verkeersongeval</a>
                        <a href="{{ route('bedrijfsongeval') }}" class="text-sm font-medium text-gray-300 hover:text-white">Bedrijfsongeval</a>
                        <a href="{{ route('ongeval-door-dieren') }}" class="text-sm font-medium text-gray-300 hover:text-white">Ongeval door dieren</a>
                        <a href="{{ route('ongeval-door-wegdek') }}" class="text-sm font-medium text-gray-300 hover:text-white">Gebrek wegdek</a>
                        <a href="{{ route('contact') }}" class="text-sm font-medium text-gray-300 hover:text-white">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile navigation menu -->
        <div id="mobileMenu" class="sm:hidden overflow-hidden transition-all duration-300 ease-in-out max-h-0">
            <div class="border-t border-gray-800 py-3 px-4 space-y-3 bg-gray-900">
                <a href="{{ route('form') }}" class="block text-base font-medium text-gray-300 hover:text-white py-1 transition-colors duration-200">Meld uw letselschade</a>
                <a href="{{ route('verkeersongeval') }}" class="block text-base font-medium text-gray-300 hover:text-white py-1 transition-colors duration-200">Verkeersongeval</a>
                <a href="{{ route('bedrijfsongeval') }}" class="block text-base font-medium text-gray-300 hover:text-white py-1 transition-colors duration-200">Bedrijfsongeval</a>
                <a href="{{ route('ongeval-door-dieren') }}" class="block text-base font-medium text-gray-300 hover:text-white py-1 transition-colors duration-200">Ongeval door dieren</a>
                <a href="{{ route('ongeval-door-wegdek') }}" class="block text-base font-medium text-gray-300 hover:text-white py-1 transition-colors duration-200">Gebrek wegdek</a>
                <a href="{{ route('contact') }}" class="block text-base font-medium text-gray-300 hover:text-white py-1 transition-colors duration-200">Contact</a>
            </div>
        </div>
    </header>

    <main class="animate-fadeIn motion-reduce:animate-none">
        @yield('content')
    </main>

    <footer class="bg-gray-900 border-t border-gray-800 mt-12 relative">
        <!-- Background image with overlay -->
        <div class="absolute inset-0 bg-gray-800/50"></div>
        
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Company Info -->
                <div class="flex flex-col">
                    <div class="flex items-center mb-6">
                        <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Letselschadetest">
                        <span class="ml-3 text-xl font-bold text-white">Letselschadetest</span>
                    </div>
                    <div class="text-sm text-gray-300 space-y-2">
                        <p class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Kalshoven 8, 4825 AM Breda
                        </p>
                        <p class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:088-0767676" class="text-blue-400 hover:text-blue-300">088-0767676</a>
                        </p>
                        <p class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            KvK: 60256974
                        </p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold mb-4 text-lg">Snelle Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('verkeersongeval') }}" class="text-gray-300 hover:text-white transition-colors">Verkeersongeval</a></li>
                        <li><a href="{{ route('bedrijfsongeval') }}" class="text-gray-300 hover:text-white transition-colors">Bedrijfsongeval</a></li>
                        <li><a href="{{ route('ongeval-door-dieren') }}" class="text-gray-300 hover:text-white transition-colors">Ongeval door dieren</a></li>
                        <li><a href="{{ route('ongeval-door-wegdek') }}" class="text-gray-300 hover:text-white transition-colors">Gebrek wegdek</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Copyright -->
                <div class="md:col-span-2">
                    <h3 class="text-white font-semibold mb-4 text-lg">Over Ons</h3>
                    <p class="text-gray-300 mb-4">Letselschadeclaimen.nl is een onderdeel van Letselschadebegeleiding B.V, te Breda. Wij helpen u bij het claimen van uw letselschade en staan voor u klaar met professioneel advies.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-.88-.06-1.601-1-1.601-1 0-1.15.781-1.15 1.601v5.604h-3v-11h2.791v1.56c.4-.8 1.125-1.56 2.25-1.56 1.625 0 3.875 1.104 3.875 4.446v6.554z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-12 pt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-sm text-gray-400">
                        <p>© {{ date('Y') }} Letselschadebegeleiding B.V. Alle rechten voorbehouden.</p>
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                        <a href="{{ route('algemene-voorwaarden') }}" class="text-gray-400 hover:text-white transition-colors">Algemene voorwaarden</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Simple JavaScript for mobile menu toggle -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('menuIcon');
            const menuContent = menu.firstElementChild;
            
            if (menu.classList.contains('max-h-0')) {
                const height = menuContent.getBoundingClientRect().height;
                menu.classList.remove('max-h-0');
                menu.style.maxHeight = height + 'px';
                icon.style.transform = 'rotate(180deg)';
            } else {
                menu.classList.add('max-h-0');
                menu.style.maxHeight = '0';
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>

    @stack('scripts')

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .motion-reduce:animate-none {
                animation: none;
            }
        }
    </style>
</body>
</html> 