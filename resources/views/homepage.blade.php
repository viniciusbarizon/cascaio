<x-guest-layout>
    <div class="bg-lime-400 flex flex-col h-screen items-center justify-center max-w-full text-black">
        <div>
            <img alt="Logo" src="{{ Vite::asset('resources/images/logo/black.png') }}">
        </div>

        <div>
            {{ __('Te ajudamos') }} <b>{{ __('gratuitamente') }}</b> {{ __('a organizar suas despesas.') }}
        </div>
    </div>
</x-guest-layout>
