<div class="w-full max-w-5xl mx-auto mt-12">

    <h2 class="text-center text-2xl font-light text-green-800 mb-6">
        Carousel
    </h2>

    <div class="relative overflow-hidden">

        {{-- Кнопка Влево --}}
       <button id="carouselPrev"
           class="absolute left-2 top-1/2 -translate-y-1/2
                  w-10 h-10 flex items-center justify-center
                  bg-green-700 text-white font-bold
                  rounded-full shadow-md
                  hover:bg-green-800 hover:scale-110 hover:shadow-lg
                  transition duration-200 z-20">
           ‹
       </button>

        {{-- Лента карусели --}}
        <div id="carouselTrack"
             class="flex gap-4 transition-transform duration-500">

            @for ($i = 1; $i <= 10; $i++)
                <a href="#"
                   class="carousel-item block min-w-[33%] cursor-pointer group"
                   onclick="alert('Hier könnte eine Galerie oder Modale geöffnet werden.')">

                    <div class="w-full aspect-[4/3] rounded-xl overflow-hidden
                                bg-green-100/60 border border-green-200 shadow-sm
                                group-hover:scale-[1.03] group-hover:shadow-lg
                                transition duration-300">

                        {{-- Заглушка --}}
                        <div class="w-full h-full flex items-center justify-center text-green-900/60 text-xl">
                            Bild {{ $i }}
                        </div>

                    </div>
                </a>
            @endfor
        </div>

        {{-- Кнопка Вправо --}}
        <button id="carouselNext"
            class="absolute right-2 top-1/2 -translate-y-1/2
                   w-10 h-10 flex items-center justify-center
                   bg-green-700 text-white font-bold
                   rounded-full shadow-md
                   hover:bg-green-800 hover:scale-110 hover:shadow-lg
                   transition duration-200 z-20">
            ›
        </button>

    </div>
</div>
