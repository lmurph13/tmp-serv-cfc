<x-app-layout>
    <x-slot name="header">
        <x-header first="Wind" second="Data" />
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg text-gray-100">
                <div class="py-8">
                    Wondering how much juice our turbine farms are kicking out? See for yourself!
                </div>

                <div class="grid grid-cols-4 gap-4 px-4 py-6">
                    @foreach($turbines as $turbine)
                        <div class="flex flex-col items-center border-2 border-primary rounded-lg p-2 transition hover:scale-110 bg-black {{ $turbine->border }}">
                            <h3 class="my-2 text-lg lg:text-xl">{{ $turbine->name }}</h3>
                            <img class="my-auto min-h-[150px]" src="{{ config('app.asset_url') }}/img/{{ $turbine->image }}" />
                            <div>
                                Turbine Status: <span class="font-bold">{{ $turbine->status }}</span>
                            </div>
                            <div>
                                Power Output: <span class="font-bold">{{ $turbine->output }} kWh</span> 
                            </div>
                            <div>
                                Output Capacity: <span class="font-bold">{{ $turbine->outputPercent }}%</span> 
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
