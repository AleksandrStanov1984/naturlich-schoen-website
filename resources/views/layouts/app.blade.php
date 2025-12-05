<!DOCTYPE html>
<html lang="de">
<head>
    @include('partials.head')
</head>

<body class="min-h-screen flex flex-col bg-cover bg-center bg-no-repeat"
      style="background-image: url('{{ Vite::asset('resources/assets/images/background-desktop.png') }}')">

    {{-- HEADER --}}
    @include('partials.header')

    <main class="flex-1 pt-24">

        @yield('content')

        {{-- CONTACT BLOCK ALWAYS BEFORE FOOTER --}}
        <div class="px-4 flex justify-center mt-8 mb-2">
            @include('partials.contact-box')
        </div>

    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

</body>
</html>
