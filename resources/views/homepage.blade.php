<x-guest-layout>
    <div class="bg-lime-400 flex flex-col gap-4 h-screen items-center justify-center max-w-full px-4 text-black">
        <div class="flex flex-row gap-4">
            <div>
                <img alt="Logo" src="{{ Vite::asset('resources/images/logo/black/elephant.png') }}">
            </div>

            <div>
                <img alt="Logo" src="{{ Vite::asset('resources/images/logo/black/cascaio.png') }}">
            </div>
        </div>

        <div class="text-center text-lg">
            {{ __('Te ajudamos') }} <b>{{ __('gratuitamente') }}</b> {{ __('a organizar suas despesas') }}.
        </div>
    </div>
</x-guest-layout>
