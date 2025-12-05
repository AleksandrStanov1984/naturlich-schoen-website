<footer class="w-full border-t border-green-300/60 bg-white/60 backdrop-blur-md text-green-900 py-3">
    <div class="max-w-6xl mx-auto px-4 flex flex-col sm:flex-row justify-between items-center gap-4">

        <div class="text-sm text-green-900/90">
            © {{ date('Y') }} Stanov Oleksandr — Alle Rechte vorbehalten.
        </div>

        <div class="flex items-center gap-4">
            @php
                $icons = [
                    ['url' => '', 'icon' => 'facebook.png', 'label' => 'Facebook'],
                    ['url' => '', 'icon' => 'instagram.png', 'label' => 'Instagram'],
                    ['url' => '', 'icon' => 'telegram.png', 'label' => 'Telegram'],
                    ['url' => '', 'icon' => 'whatsapp.png', 'label' => 'WhatsApp'],
                ];
            @endphp

            @foreach($icons as $item)
                <a href="{{ $item['url'] }}" class="w-8 h-8 rounded-full flex items-center justify-center bg-green-100/60 hover:bg-green-200 hover:scale-105 transition-all duration-200">
                    <img src="{{ Vite::asset('resources/assets/icons/' . $item['icon']) }}" alt="{{ $item['label'] }}" class="w-4 h-4">
                </a>
            @endforeach
        </div>

        <div class="flex gap-6 text-sm">
            <a href="{{ route('impressum') }}" class="hover:text-green-800 transition">Impressum</a>
            <a href="{{ route('datenschutz') }}" class="hover:text-green-800 transition">Datenschutz</a>
        </div>

    </div>
</footer>
