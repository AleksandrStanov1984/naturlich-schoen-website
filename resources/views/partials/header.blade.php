<header class="w-full fixed top-0 left-0 z-50 bg-white/40 backdrop-blur-md shadow-sm">
    <div class="max-w-5xl mx-auto px-4 py-3 flex justify-between items-center">

        <img
            src="{{ Vite::asset('resources/assets/images/naturlich-logo.png') }}"
            alt="Natürlich Schön Logo"
            class="h-10 w-auto opacity-90"
        >

        <nav class="flex gap-4 sm:gap-6 text-green-800 font-medium text-sm">

            @php
                $links = [
                    ['url' => '/', 'label' => 'Home'],
                    ['url' => '/leistungen', 'label' => 'Leistungen'],
                    ['url' => '/kontakt', 'label' => 'Kontakt'],
                ];
            @endphp

            @foreach($links as $link)
                <a href="{{ $link['url'] }}"
                   class="px-3 py-1 rounded-full transition-all duration-200
                          hover:bg-green-200/60 hover:text-green-900 hover:shadow-sm">
                    {{ $link['label'] }}
                </a>
            @endforeach

        </nav>

    </div>
</header>
