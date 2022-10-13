<x-guest-layout>
    <div class="bg-lime-400 flex flex-col gap-8 h-screen items-center justify-center max-w-full px-4 text-black">
        <div class="flex flex-row gap-4">
            <div>
                <img alt="Elephant"
                    src="{{ Vite::asset('resources/images/logo/black/elephant/background-transparent.png') }}">
            </div>

            <div>
                <img alt="Cascaio" src="{{ Vite::asset('resources/images/logo/black/cascaio.png') }}">
            </div>
        </div>

        <div class="text-center text-2xl">
            {{ __('Te ajudamos') }}
            <b>{{ __('gratuitamente') }}</b>
            {{ __('a organizar suas despesas') }}.
        </div>

        <div class="flex flex-row gap-4">
            <a href="{{ route('login') }}">
                <button class="bg-white font-semibold hover:bg-black hover:text-white h-8 rounded w-28">
                    {{ __('Entrar') }}
                </button>
            </a>

            <a href="{{ route('register') }}">
                <button class="bg-white font-semibold hover:bg-black hover:text-white h-8 rounded w-28">
                    {{ __('Registrar') }}
                </button>
            </a>
        </div>

        <div>
            <b>{{ __('Fale com a gente') }}:</b>
            <a class='hover:text-white' href='mailto:cascaio@cascaio.com'>cascaio@cascaio.com</a>.
        </div>
    </div>
</x-guest-layout>
