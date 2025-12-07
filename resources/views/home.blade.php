@extends('layouts.app')

@section('title', 'Natürlich Schön – Kosmetikstudio & Wellness')
@section('meta_description', 'Natürliche Wellness- und Kosmetikbehandlungen in Donaueschingen – von Iluta Käfer.')

@section('content')

    {{-- HERO BLOCK --}}
    <section class="text-center px-4 pt-10">
        <h1 class="text-4xl sm:text-5xl text-green-900 font-light mb-2">Natürlich Schön</h1>
        <p class="text-green-800 max-w-xl mx-auto mb-10">
            Kosmetik: Wellness und natürliche Pflege – liebevoll gestaltet von Iluta Käfer.
        </p>
    </section>

    <section id="promoBanner"
        class="relative w-full max-w-5xl mx-auto mt-10 overflow-hidden group select-none
               transition-all duration-300 ease-out
               hover:shadow-xl hover:shadow-green-200/20 hover:-translate-y-3">


        {{-- LEFT ARROW --}}
        <button id="promoPrev"
            class="absolute left-2 top-1/2 -translate-y-1/2 bg-green-700 text-white
                   w-10 h-10 rounded-full shadow-md hidden group-hover:flex
                   items-center justify-center transition duration-200 hover:scale-110 z-20">
            ‹
        </button>

        {{-- RIGHT ARROW --}}
        <button id="promoNext"
            class="absolute right-2 top-1/2 -translate-y-1/2 bg-green-700 text-white
                   w-10 h-10 rounded-full shadow-md hidden group-hover:flex
                   items-center justify-center transition duration-200 hover:scale-110 z-20">
            ›
        </button>

        {{-- SLIDER --}}
        <div id="promoSlides" class="relative w-full h-60 sm:h-72 md:h-80">

            @for ($i = 1; $i <= 5; $i++)
                <div class="promoSlide absolute inset-0 opacity-0 transition-opacity duration-700 ease-out">
                    <div class="w-full h-full bg-green-200/50 border border-green-300/40 rounded-3xl
                                backdrop-blur-sm shadow-sm flex items-center justify-center text-xl text-green-900/70">
                        Banner {{ $i }}
                    </div>
                </div>
            @endfor

        </div>

        {{-- DOTS --}}
        <div id="promoDots" class="flex justify-center mt-4 gap-2">
            @for ($i = 0; $i < 5; $i++)
                <div class="promoDot w-3 h-3 rounded-full bg-green-300 cursor-pointer transition"></div>
            @endfor
        </div>

    </section>

@include('partials.about-me')

@include('partials.carousel')









@endsection

