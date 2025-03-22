@extends('accidents.layout')

@section('title', 'Verkeersongeval')

@section('accident_image')
<img class="w-full rounded-lg shadow-xl ring-1 ring-black ring-opacity-5" src="{{ asset('images/categories/verkeersongeval.jpg') }}" alt="Verkeersongeval">
@endsection

@section('description')
<p>
    Een verkeersongeval kan een grote impact hebben op uw leven. Of u nu autobestuurder, fietser of voetganger bent, 
    de gevolgen kunnen zowel lichamelijk als financieel ingrijpend zijn. Bij Letselschadetest helpen we u om de 
    schade die u heeft opgelopen te verhalen op de aansprakelijke partij.
</p>
<p>
    Wij hebben ruime ervaring met verschillende soorten verkeersongevallen:
</p>
<ul class="mt-4 list-disc pl-5 space-y-2">
    <li>Auto-ongelukken</li>
    <li>Fiets- en bromfietsongevallen</li>
    <li>Aanrijdingen met voetgangers</li>
    <li>Eenzijdige ongevallen</li>
    <li>Whiplash en ander letsel</li>
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
                Vul het formulier in en wij nemen binnen 24 uur contact met u op voor een gratis intakegesprek.
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
            <h4 class="text-lg font-medium text-gray-900">Beoordeling van uw zaak</h4>
            <p class="mt-1 text-gray-500">
                Onze experts beoordelen uw situatie en adviseren u over de mogelijkheden voor het verhalen van uw schade.
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
            <h4 class="text-lg font-medium text-gray-900">Schadeafhandeling</h4>
            <p class="mt-1 text-gray-500">
                Wij handelen uw zaak af met de verzekeraar en zorgen dat u de vergoeding krijgt waar u recht op heeft.
            </p>
        </div>
    </div>
</div>
@endsection

@section('cta_button')
<div class="mt-12">
    <div class="inline-flex rounded-md shadow">
        <a href="/form?category=verkeersongeval" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
            Ik heb een verkeersongeval gehad
            <svg class="ml-3 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
@endsection 