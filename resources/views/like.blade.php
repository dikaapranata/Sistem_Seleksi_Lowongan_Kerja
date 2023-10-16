<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Like
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse ($lokers as $loker)
                <a href="{{ route('loker.show', $loker->idloker) }}">
                    <div
                        class="bg-white grid grid-cols-4 place-items-center overflow-hidden shadow-sm sm:rounded-lg mb-3 p-6 text-gray-900 hover:bg-gray-200 hover:shadow-inner">
                        <div class="text-base justify-self-start">
                            <div class="text-sky-600 font-medium">
                                {{ $loker->nama }}
                            </div>
                            <div class="text-gray-700">
                                {{ $loker->idperusahaan }}
                            </div>
                        </div>
                        <div class="text-center">
                            {{ $loker->tipe }}
                        </div>
                        <div class="text-emerald-600 font-bold ">
                            {{ abbreviateNumber($loker->gaji_min) . ' - ' . abbreviateNumber($loker->gaji_max) }}
                        </div>
                        <div class="text-gray-600 justify-self-end">
                            {{ 'Tersisa ' . now()->diffInDays($loker->tgl_aktif) . ' hari' }}
                        </div>
                    </div>
                </a>
            @empty
                <div class="bg-white font-semibold overflow-hidden shadow-sm sm:rounded-lg mb-3 p-6 text-gray-900">
                    Data Not Found!
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
