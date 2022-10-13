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
            <x-homepage.button route="login" text="Entrar"/>
            <x-homepage.button route="register" text="Registrar"/>
        </div>

        <div>
            <b>{{ __('Fale com a gente') }}:</b>
            <a class='hover:text-gray-600' href='mailto:cascaio@cascaio.com'>cascaio@cascaio.com</a>.
        </div>
    </div>
</x-guest-layout>
