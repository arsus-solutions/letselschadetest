@extends('layouts.app')

@section('title', 'Contact - Letselschadetest')

@section('content')
<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8">
    <div class="relative max-w-xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Contact
            </h2>
            <p class="mt-4 text-lg leading-6 text-gray-500">
                Heeft u vragen of opmerkingen? Neem gerust contact met ons op.
            </p>
        </div>

        <!-- Employee Section -->
        <div class="mt-12">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2">
                <!-- Employee 1 -->
                <div class="text-center">
                    <div class="relative">
                        <img src="{{ asset('images/employee1.jpg') }}" alt="Roel van Reenen" class="w-48 h-48 mx-auto rounded-full object-cover shadow-lg">
                        <div class="mt-4">
                            <h3 class="text-lg font-medium text-gray-900">Roel van Reenen</h3>
                            <p class="text-sm text-gray-600">Registerexpert Personenschade (NIVRE)</p>
                        </div>
                    </div>
                </div>

                <!-- Employee 2 -->
                <div class="text-center">
                    <div class="relative">
                        <img src="{{ asset('images/employee2.jpg') }}" alt="Judith van Helmont-Mallee" class="w-48 h-48 mx-auto rounded-full object-cover shadow-lg">
                        <div class="mt-4">
                            <h3 class="text-lg font-medium text-gray-900">Judith van Helmont-Mallee</h3>
                            <p class="text-sm text-gray-600">Registerexpert Personenschade (NIVRE)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mt-12">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Onze contactgegevens</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="font-medium text-gray-900">Letselschade-begeleiding B.V.</p>
                            <p class="text-gray-600">Kalshoven 8</p>
                            <p class="text-gray-600">4825 AM Breda</p>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                <a href="tel:088-0767676" class="hover:text-blue-600">088 076 76 76</a>
                            </p>
                            <p class="text-gray-600">
                                <a href="mailto:info@letselschade-begeleiding.nl" class="hover:text-blue-600">
                                    info@letselschade-begeleiding.nl
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="mt-12">
            @if(session('success'))
                <div class="rounded-md bg-green-50 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="grid grid-cols-1 gap-y-6">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" autocomplete="name" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:outline-none focus:ring-0 transition duration-200 sm:text-sm"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" autocomplete="email" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:outline-none focus:ring-0 transition duration-200 sm:text-sm"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                    <div class="mt-1">
                        <input type="tel" name="phone" id="phone" autocomplete="tel" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:outline-none focus:ring-0 transition duration-200 sm:text-sm"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Onderwerp</label>
                    <div class="mt-1">
                        <select id="subject" name="subject" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:outline-none focus:ring-0 transition duration-200 sm:text-sm">
                            <option value="">Waar gaat uw vraag/opmerking over</option>
                            <option value="Technische problemen" {{ old('subject') == 'Technische problemen' ? 'selected' : '' }}>
                                Technische problemen
                            </option>
                            <option value="Onze vestigingen/ letselschade adviseurs" {{ old('subject') == 'Onze vestigingen/ letselschade adviseurs' ? 'selected' : '' }}>
                                Onze vestigingen/ letselschade adviseurs
                            </option>
                            <option value="Letselschadebehandelaar" {{ old('subject') == 'Letselschadebehandelaar' ? 'selected' : '' }}>
                                Letselschadebehandelaar
                            </option>
                            <option value="Overig" {{ old('subject') == 'Overig' ? 'selected' : '' }}>
                                Overig
                            </option>
                        </select>
                        @error('subject')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Bericht</label>
                    <div class="mt-1">
                        <textarea id="message" name="message" rows="4" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:outline-none focus:ring-0 transition duration-200 sm:text-sm">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                        Verstuur bericht
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 