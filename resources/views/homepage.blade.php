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

        <x-homepage.we-help-you/>

        <x-homepage.login-and-register/>

        <x-homepage.talk-to-us email="cascaio@cascaio.com" text="Fale com a gente"/>
    </div>
</x-guest-layout>
