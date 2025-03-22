@extends('accidents.layout')

@section('title', 'Bedrijfsongeval')

@section('accident_image')
<img class="w-full rounded-lg shadow-xl ring-1 ring-black ring-opacity-5" src="{{ asset('images/categories/bedrijfsongeval.jpg') }}" alt="Bedrijfsongeval">
@endsection

@section('description')
<p>
    Een ongeval op het werk kan verstrekkende gevolgen hebben voor uw gezondheid en uw carrière. 
    Werkgevers zijn wettelijk verplicht om te zorgen voor een veilige werkomgeving. Als er toch 
    een ongeval plaatsvindt, heeft u mogelijk recht op schadevergoeding.
</p>
<p>
    Wij helpen bij verschillende soorten bedrijfsongevallen:
</p>
<ul class="mt-4 list-disc pl-5 space-y-2">
    <li>Valpartijen op de werkvloer</li>
    <li>Ongevallen met machines of gereedschap</li>
    <li>Uitglijden door gladde vloeren</li>
    <li>Onveilige werksituaties</li>
    <li>RSI en andere werkgerelateerde klachten</li>
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
                Beschrijf uw situatie in het formulier en onze experts nemen binnen 24 uur contact met u op.
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
            <h4 class="text-lg font-medium text-gray-900">Analyse van uw zaak</h4>
            <p class="mt-1 text-gray-500">
                We onderzoeken de omstandigheden van het ongeval en de aansprakelijkheid van uw werkgever.
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
            <h4 class="text-lg font-medium text-gray-900">Belangenbehartiging</h4>
            <p class="mt-1 text-gray-500">
                Wij behartigen uw belangen en zorgen voor een passende schadevergoeding voor uw situatie.
            </p>
        </div>
    </div>
</div>
@endsection

@section('cta_button')
<div class="mt-12">
    <div class="inline-flex rounded-md shadow">
        <a href="/form?category=bedrijfsongeval" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
            Ik heb een bedrijfsongeval gehad
            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
@endsection 