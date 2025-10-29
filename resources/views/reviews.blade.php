@extends('layouts.app')

@section('title', 'Klantbeoordelingen - Letselschadetest')

@section('content')
<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Klantbeoordelingen
            </h1>
            <p class="mt-4 mb-4 text-lg leading-6 text-gray-600">
                Lees wat onze klanten zeggen over Letselschade-begeleiding B.V.
            </p>
        </div>

        <!-- Reviews List -->
        <div class="space-y-6 mb-12">
            @foreach($reviews as $review)
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ $review['name'] }}
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">
                            {{ $review['date'] }}
                        </p>
                    </div>
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    "{{ $review['comment'] }}"
                </p>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($reviews->hasPages())
        <div class="flex items-center justify-center border-t border-gray-200 pt-8">
            <nav class="flex items-center space-x-2" aria-label="Pagination">
                {{-- Previous Page Link --}}
                @if($reviews->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-white border border-gray-300 cursor-default rounded-md">
                        <span class="sr-only">Vorige</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @else
                    <a href="{{ $reviews->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 rounded-md transition duration-200">
                        <span class="sr-only">Vorige</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif

                {{-- Page Numbers --}}
                @foreach($reviews->getUrlRange(1, $reviews->lastPage()) as $page => $url)
                    @if($page == $reviews->currentPage())
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded-md">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 rounded-md transition duration-200">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if($reviews->hasMorePages())
                    <a href="{{ $reviews->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 rounded-md transition duration-200">
                        <span class="sr-only">Volgende</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-white border border-gray-300 cursor-default rounded-md">
                        <span class="sr-only">Volgende</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                @endif
            </nav>
        </div>

        {{-- Pagination Info --}}
        <div class="mt-4 text-center text-sm text-gray-600">
            Toont {{ $reviews->firstItem() }} tot {{ $reviews->lastItem() }} van {{ $reviews->total() }} beoordelingen
        </div>
        @endif
    </div>
</div>
@endsection

