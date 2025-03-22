@extends('layouts.app')

@section('content')
<div class="relative py-16 bg-white">
    <div class="relative">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:items-start lg:gap-24 lg:px-8">
            <div class="relative sm:py-16 lg:py-0">
                <div class="relative mx-auto max-w-md px-6 sm:max-w-3xl lg:max-w-none lg:px-0">
                    @yield('accident_image')
                </div>
            </div>

            <div class="relative mx-auto max-w-md px-6 sm:max-w-3xl lg:px-0">
                <!-- Content -->
                <div class="pt-12 sm:pt-16 lg:pt-20">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        @yield('title')
                    </h2>
                    <div class="mt-6 space-y-6 text-gray-500">
                        @yield('description')
                    </div>
                </div>

                <!-- Steps -->
                <div class="mt-12">
                    <h3 class="text-xl font-semibold text-gray-900">Hoe werkt het?</h3>
                    <div class="mt-6">
                        @yield('steps')
                    </div>
                </div>

                <!-- CTA Button -->
                @yield('cta_button')
            </div>
        </div>
    </div>
</div>
@endsection 