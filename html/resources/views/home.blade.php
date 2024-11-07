<x-app-layout>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative text-center">
                <div class="text-5xl absolute top-1/2 text-center left-1/2 z-20 w-full from-transparent via-black to-transparent from-30% to-70% bg-gradient-to-r -translate-x-1/2 -translate-y-1/2">
                    <x-header first="Energia" second="Ventosa" />
                </div>
                <div class="py-4 relative">
                    <img class="rounded-md absolute z-10" src="{{ config('app.asset_url') }}/img/windmillBg.jpg" />
                    <img class="rounded-md blur-md" src="{{ config('app.asset_url') }}/img/windmillBg.jpg" />
                </div>
            </div>
            <div class="overflow-hidden shadow-sm sm:rounded-lg text-gray-100">@todo: Do NOT, forget to put the company blurb here. The CEO will have your head if you do.</div>
            {{-- <div class="overflow-hidden shadow-sm sm:rounded-lg text-gray-100">
                At Energia <span class="text-primary">Ventosa</span>, we harness
                the relentless power of the wind to fuel our vast empire of energy
                consumption. Our turbines, tirelessly spinning, generate electricity
                that powers everything from bustling cities to remote outposts.
                While we boast about our green credentials and renewable energy, the
                truth is less innocent. Behind our clean facade lies a darker
                reality: our insatiable hunger for energy drives us to control every
                gust, every breeze, to ensure our dominance. And should our turbines
                ever slow, the world won't just face a temporary blackout - it will
                plunge into <span class="text-red-600 font-bold">chaos</span>, revealing
                the true extent of our control over the wind itself. The skies
                whisper of our grip, and in that silence, our true power becomes
                undeniable.
            </div> --}}
        </div>
    </div>
</x-app-layout>
