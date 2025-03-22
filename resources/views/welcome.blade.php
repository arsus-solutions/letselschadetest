@extends('layouts.app')

@section('content')
<div class="relative isolate">
    <!-- Hero section -->
    <div class="relative">
        <div class="absolute inset-0">
            <img src="{{ asset('images/letselschade_whiplash.jpg') }}" alt="Letselschade" class="w-full h-full object-cover brightness-[0.3]">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/50 to-blue-600/30 mix-blend-multiply"></div>
        </div>
        <div class="relative mx-auto max-w-7xl px-6 py-6 sm:py-32 sm:py-40 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h1 class="font-heading text-4xl font-extrabold tracking-tight text-white sm:text-6xl lg:text-7xl">
                    Direct uw letselschade claimen
                </h1>
                <p class="mt-6 hidden sm:block text-lg leading-8 text-gray-200">
                    Snel, eenvoudig en direct uw recht halen. Gratis advies en begeleiding bij uw letselschade claim.
                </p>
                <div class="mt-6 hidden sm:flex sm:mt-10 items-center justify-center gap-x-6">
                    <a href="#start-test" class="scroll-smooth-btn rounded-md bg-blue-600 px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                        Start direct
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main categories -->
    <div id="start-test" class="mx-auto max-w-7xl px-6 lg:px-8 -mt-16 relative z-10">
        <div class="mx-auto max-w-2xl text-center bg-white rounded-t-xl shadow-xl px-8 py-10">
            <h2 class="font-heading text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Start uw letselschadetest</h2>
            <p class="mt-4 text-lg leading-8 text-gray-600">
                Kies het type ongeval en begin direct met uw claim
            </p>
        </div>
        <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:mt-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            <div class="group relative">
                <a href="{{ route('form') }}?category=verkeersongeval" class="block">
                    <div class="aspect-[16/9] w-full overflow-hidden rounded-xl bg-gray-100 shadow-lg ring-1 ring-gray-900/10 group-hover:opacity-75 group-hover:ring-blue-600/20 transition duration-300">
                        <img src="{{ asset('images/categories/verkeersongeval.jpg') }}" alt="Verkeersongeval" class="h-full w-full object-cover">
                    </div>
                    <h3 class="mt-6 text-lg font-heading font-bold leading-8 text-gray-900">Verkeersongeval</h3>
                    <p class="mt-2 text-base leading-7 text-gray-600">Claim uw schade na een verkeersongeval</p>
                </a>
            </div>

            <div class="group relative">
                <a href="{{ route('form') }}?category=bedrijfsongeval" class="block">
                    <div class="aspect-[16/9] w-full overflow-hidden rounded-xl bg-gray-100 shadow-lg ring-1 ring-gray-900/10 group-hover:opacity-75 group-hover:ring-blue-600/20 transition duration-300">
                        <img src="{{ asset('images/categories/bedrijfsongeval.jpg') }}" alt="Bedrijfsongeval" class="h-full w-full object-cover">
                    </div>
                    <h3 class="mt-6 text-lg font-heading font-bold leading-8 text-gray-900">Bedrijfsongeval</h3>
                    <p class="mt-2 text-base leading-7 text-gray-600">Schade claimen na een ongeval op het werk</p>
                </a>
            </div>

            <div class="group relative">
                <a href="{{ route('form') }}?category=dieren" class="block">
                    <div class="aspect-[16/9] w-full overflow-hidden rounded-xl bg-gray-100 shadow-lg ring-1 ring-gray-900/10 group-hover:opacity-75 group-hover:ring-blue-600/20 transition duration-300">
                        <img src="{{ asset('images/categories/dieren.jpg') }}" alt="Ongeval door dieren" class="h-full w-full object-cover">
                    </div>
                    <h3 class="mt-6 text-lg font-heading font-bold leading-8 text-gray-900">Ongeval door dieren</h3>
                    <p class="mt-2 text-base leading-7 text-gray-600">Claim schade veroorzaakt door dieren</p>
                </a>
            </div>

            <div class="group relative">
                <a href="{{ route('form') }}?category=wegdek" class="block">
                    <div class="aspect-[16/9] w-full overflow-hidden rounded-xl bg-gray-100 shadow-lg ring-1 ring-gray-900/10 group-hover:opacity-75 group-hover:ring-blue-600/20 transition duration-300">
                        <img src="{{ asset('images/categories/wegdek.jpg') }}" alt="Gebrek wegdek" class="h-full w-full object-cover">
                    </div>
                    <h3 class="mt-6 text-lg font-heading font-bold leading-8 text-gray-900">Gebrek wegdek</h3>
                    <p class="mt-2 text-base leading-7 text-gray-600">Schade claimen door gebreken in het wegdek</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Features section -->
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-heading font-semibold leading-7 text-blue-600">Waarom Letselschadetest?</h2>
            <p class="mt-2 text-3xl font-heading font-bold tracking-tight text-gray-900 sm:text-4xl">
                Professionele hulp bij letselschade
            </p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="flex flex-col items-center text-center">
                <div class="relative rounded-full p-1 bg-blue-100/10 ring-1 ring-blue-900/10 mb-6">
                    <img src="{{ asset('images/freecost.jpg') }}" alt="Gratis advies" class="h-16 w-16 rounded-full object-cover">
                </div>
                <h3 class="text-lg font-heading font-bold leading-8 text-gray-900">100% Kosteloos</h3>
                <p class="mt-2 text-base leading-7 text-gray-600">Wij werken volledig op basis van no cure no pay. U betaalt alleen als we uw zaak winnen.</p>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="relative rounded-full p-1 bg-blue-100/10 ring-1 ring-blue-900/10 mb-6">
                    <img src="{{ asset('images/expert.jpg') }}" alt="Expert advies" class="h-16 w-16 rounded-full object-cover">
                </div>
                <h3 class="text-lg font-heading font-bold leading-8 text-gray-900">Expert Advies</h3>
                <p class="mt-2 text-base leading-7 text-gray-600">Onze letselschade experts staan voor u klaar met persoonlijk advies.</p>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="relative rounded-full p-1 bg-blue-100/10 ring-1 ring-blue-900/10 mb-6">
                    <img src="{{ asset('images/juridische.jpg') }}" alt="Juridische hulp" class="h-16 w-16 rounded-full object-cover">
                </div>
                <h3 class="text-lg font-heading font-bold leading-8 text-gray-900">Juridische Bijstand</h3>
                <p class="mt-2 text-base leading-7 text-gray-600">Professionele juridische ondersteuning bij het hele letselschadeproces.</p>
            </div>
        </div>
    </div>

    <!-- What is letselschade section -->
    <div class="relative overflow-hidden bg-gray-50 py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-heading font-semibold leading-7 text-blue-600">Wat is letselschade?</h2>
                        <p class="mt-2 text-3xl font-heading font-bold tracking-tight text-gray-900 sm:text-4xl">
                            Uw recht op schadevergoeding
                        </p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Letselschade is schade die u oploopt door een ongeval waarbij u lichamelijk of geestelijk letsel heeft opgelopen.
                        </p>
                        <p class="mt-4 text-lg leading-8 text-gray-600">
                            U heeft recht op een schadevergoeding voor:
                        </p>
                        <ul class="mt-6 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-lg text-gray-700">Medische kosten</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-lg text-gray-700">Inkomensverlies</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-lg text-gray-700">Smartengeld</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-lg text-gray-700">Hulp in de huishouding</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-lg text-gray-700">Reiskosten</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <img src="{{ asset('images/letselschade.jpg') }}" alt="Letselschade uitleg" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
            </div>
        </div>
    </div>
</div>
@endsection 