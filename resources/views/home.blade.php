<x-layout>
    <section class="p-4 max-lg:min-h-[90dvh] min-h-[70dvh] flex justify-center items-center">
        <div class="flex flex-col text-center gap-4 md:gap-6 lg:gap-8">
            <h1 class="font-bold max-md:text-4xl text-6xl text-gray-700">Uni<span class="text-primary">Class</span></h1>
            <p class="mx-auto w-3/4 text-lg md:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis et beatae quae iure assumenda sunt deleniti pariatur voluptates enim doloribus? Architecto doloribus error fugit vel voluptates quidem quia reprehenderit dolorum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias consectetur in quisquam voluptate nostrum quae aut animi eligendi officiis. Laboriosam aspernatur temporibus quidem illum cupiditate amet nisi voluptates doloremque in.</p>
            <div class="flex items-center justify-center gap-2 md:gap-4 lg:gap-6 max-lg:scale-75">
                @auth
                    @if (auth()->user()->hasRole('admin'))
                        <a href="{{ route('dashboard') }}" class="btn">Tableau de bord</a>
                    @else
                        <a href="" class="btn">Voir le classement</a>
                    @endif                
                @else
                    <a href="{{ route('login') }}" class="btn ">Se connecter</a>
                    <a href="{{ route('register') }}" class="btn-hover">S'inscrire</a>
                @endauth
            </div>
        </div>
    </section>
</x-layout>