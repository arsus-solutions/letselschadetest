@extends('accidents.layout')

@section('title', 'Ongeval door dieren')

@section('accident_image')
<img class="w-full rounded-lg shadow-xl ring-1 ring-black ring-opacity-5" src="{{ asset('images/categories/dieren.jpg') }}" alt="Ongeval door dieren">
@endsection

@section('description')
<p>
    Een ongeval veroorzaakt door een dier kan zeer onverwacht en traumatisch zijn. Of het nu gaat om 
    een aanrijding met een dier op de weg of een incident met een huisdier, de gevolgen kunnen ernstig zijn. 
    In veel gevallen kunt u de schade verhalen op de eigenaar van het dier of een verzekering.
</p>
<p>
    Wij hebben ervaring met verschillende soorten ongevallen door dieren:
</p>
<ul class="mt-4 list-disc pl-5 space-y-2">
    <li>Aanrijdingen met loslopende dieren</li>
    <li>Bijtincidenten met honden</li>
    <li>Ongevallen met vee</li>
    <li>Schade door huisdieren</li>
    <li>Incidenten in natuurgebieden</li>
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
                Leg uw situatie aan ons voor via het formulier en wij nemen snel contact met u op.
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
            <h4 class="text-lg font-medium text-gray-900">Onderzoek aansprakelijkheid</h4>
            <p class="mt-1 text-gray-500">
                We onderzoeken wie aansprakelijk is voor het ongeval en welke verzekering de schade dekt.
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
            <h4 class="text-lg font-medium text-gray-900">Schaderegeling</h4>
            <p class="mt-1 text-gray-500">
                Wij regelen de schadevergoeding met de aansprakelijke partij of hun verzekeraar.
            </p>
        </div>
    </div>
</div>
@endsection

@section('cta_button')
<div class="mt-12">
    <div class="inline-flex rounded-md shadow">
        <a href="/form?category=ongeval-door-dieren" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
            Ik heb een ongeval met een dier gehad
            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
@endsection 