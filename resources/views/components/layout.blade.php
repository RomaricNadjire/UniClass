<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
       
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body class="max-w-[100dvw] overflow-x-hidden">
        <nav class="navigation" id="navigation">
            <div class="logo-container flex items-center justify-center max-lg:justify-between max-lg:w-full w-min text-gray-700">
                <x-application-logo route="home"/>
                <div class="cursor-pointer z-50 h-8  w-10 flex items-center relative"" onclick="display()">
                    <div class="" id="toggler"></div>
                </div>
            </div>
            <div class="links" id="links">
                <a href="" class="link max-lg:w-full max-lg:p-3 max-lg:divide-gray-700 max-lg:hover:bg-[#6b64f13f] hover:scale-105 overflow-hidden">Notes</a>
                <a href="" class="link max-lg:w-full max-lg:p-3 max-lg:divide-gray-700 max-lg:hover:bg-[#6b64f13f] hover:scale-105 overflow-hidden">Classement</a>
                @auth
                    <a href="{{ route('profile.edit') }}" class="link max-lg:w-full max-lg:p-3 max-lg:divide-gray-700 max-lg:hover:bg-[#6b64f13f] hover:scale-105 overflow-hidden">Profil</a>
                    @if (auth()->user()->hasRole('admin'))
                        <a href="{{ route('dashboard') }}" class="btn-hover">Tableau de bord</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="link max-lg:w-full max-lg:p-3 max-lg:divide-gray-700 max-lg:hover:bg-[#6b64f13f] hover:scale-105 overflow-hidden">Connexion</a>


                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-hover">s'inscrire</a>
                    @endif
                @endauth
            </div>
        </nav>

        {{ $slot }}

        <script>
            function display() {
                document.getElementById('toggler').classList.toggle('rotate')
                document.getElementById('links').classList.toggle('max-lg:scale-100')
                document.getElementById('navigation').classList.toggle('max-lg:h-auto')
            }
        </script>
    </body>
</html>
