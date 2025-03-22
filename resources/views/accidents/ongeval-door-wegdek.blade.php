@extends('accidents.layout')

@section('title', 'Ongeval door gebrek wegdek')

@section('accident_image')
<img class="w-full rounded-lg shadow-xl ring-1 ring-black ring-opacity-5" src="{{ asset('images/categories/wegdek.jpg') }}" alt="Ongeval door gebrek wegdek">
@endsection

@section('description')
<p>
    Een ongeluk door een slecht wegdek of gebrekkig wegonderhoud komt vaker voor dan u denkt. 
    Wegbeheerders zijn verantwoordelijk voor het onderhoud van de weg en kunnen aansprakelijk 
    zijn voor ongevallen die ontstaan door gebreken in het wegdek.
</p>
<p>
    Wij helpen bij ongevallen veroorzaakt door:
</p>
<ul class="mt-4 list-disc pl-5 space-y-2">
    <li>Gaten in het wegdek</li>
    <li>Losliggende tegels of stenen</li>
    <li>Gladheid door niet strooien</li>
    <li>Slechte markering of bewegwijzering</li>
    <li>Onvoldoende verlichting</li>
</ul>
@endsection

@section('steps')
<div class="space-y-4">
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-white">
                1
            </div>
        </div>
        <div class="ml-4">
            <h4 class="text-lg font-medium text-gray-900">Gratis intake</h4>
            <p class="mt-1 text-gray-500">
                Beschrijf uw ongeval in het formulier en wij nemen binnen 24 uur contact met u op.
            </p>
        </div>
    </div>

    <div class="flex items-start">
        <div class="flex-shrink-0">
            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-white">
                2
            </div>
        </div>
        <div class="ml-4">
            <h4 class="text-lg font-medium text-gray-900">Onderzoek en bewijsvoering</h4>
            <p class="mt-1 text-gray-500">
                We verzamelen bewijs van het gebrek en onderzoeken de aansprakelijkheid van de wegbeheerder.
            </p>
        </div>
    </div>

    <div class="flex items-start">
        <div class="flex-shrink-0">
            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-white">
                3
            </div>
        </div>
        <div class="ml-4">
            <h4 class="text-lg font-medium text-gray-900">Schadevergoeding</h4>
            <p class="mt-1 text-gray-500">
                Wij zorgen dat u de schadevergoeding krijgt waar u recht op heeft van de verantwoordelijke instantie.
            </p>
        </div>
    </div>
</div>
@endsection

@section('cta_button')
<div class="mt-12">
    <div class="inline-flex rounded-md shadow">
        <a href="/form?category=ongeval-door-wegdek" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
            Ik heb een ongeval door het wegdek gehad
            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
@endsection 