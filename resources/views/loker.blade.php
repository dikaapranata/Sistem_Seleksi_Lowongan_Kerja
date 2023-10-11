<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Loker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($lokers as $loker)
            <a href="#" class="">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3 p-6 text-gray-900 flex justify-between hover:bg-gray-100">
                    <div>
                        {{ $loker->nama }}
                    </div>
                    <div>
                        {{ $loker->tipe }}
                    </div>
                    <div>

                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
