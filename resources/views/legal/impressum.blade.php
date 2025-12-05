@extends('layouts.app')

@section('title', 'Impressum – Natürlich Schön')
@section('meta_description', 'Rechtliche Informationen und Impressum für das Kosmetikstudio Natürlich Schön.')

@section('content')
    <section class="max-w-4xl mx-auto px-4 py-10 text-green-900">

        <h1 class="text-3xl sm:text-4xl font-light mb-6">
            Impressum
        </h1>

        <p class="text-sm sm:text-base leading-relaxed mb-4">
            Dies ist eine Platzhalterversion des Impressums. Hier werden später die rechtlichen
            Informationen, Verantwortlichkeiten und Kontaktangaben eingetragen.
        </p>

        {{-- BUTTONS --}}
        <div class="mt-8">
            <div class="flex flex-col sm:flex-row gap-4">

                <a href="{{ url()->previous() }}" class="btn-primary">
                    ← Zurück
                </a>

                <a href="{{ Vite::asset('resources/assets/pdf/sample.pdf') }}" class="btn-secondary">
                    PDF herunterladen
                </a>

            </div>
        </div>

    </section>
@endsection
