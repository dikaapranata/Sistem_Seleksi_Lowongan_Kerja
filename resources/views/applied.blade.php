<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Applied
        </div>
    </x-slot>

    @if (session('status'))
    <x-session-status>
        {{ session('status') }}
    </x-session-status>
    @endif

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

                        {{-- Menunggu seleksi administrasi --}}
                        @if ($loker->idtahapan == 1)
                        <span
                            class="inline-flex items-center justify-self-end bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                            <span class="w-2 h-2 mr-1 bg-gray-500 rounded-full"></span>
                            Menunggu seleksi administrasi
                        </span>

                        {{-- Lulus administrasi --}}
                        @elseif ($loker->idtahapan == 2 and $loker->nilai == 1)
                        <span
                            class="inline-flex items-center justify-self-end bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                            <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                            Lulus seleksi administrasi
                        </span>

                        {{-- Tidak lulus administrasi --}}
                        @elseif ($loker->idtahapan == 2 and $loker->nilai == 0)
                        <span class="inline-flex items-center justify-self-end bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                            <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                            Tidak lulus seleksi administrasi
                        </span>

                        {{-- Lulus wawancara --}}
                        @elseif ($loker->idtahapan == 3 and $loker->nilai == 1)
                        <span
                            class="inline-flex items-center justify-self-end bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                            <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                            Lulus seleksi wawancara
                        </span>

                        {{-- Tidak lulus wawancara --}}
                        @elseif ($loker->idtahapan == 3 and $loker->nilai == 0)
                        <span class="inline-flex items-center justify-self-end bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                            <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                            Tidak lulus seleksi wawancara
                        </span>
                        @endif
                        {{-- <span
                            class="inline-flex items-center justify-self-end bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                            <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                            Available
                        </span>
                        <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                            <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                            Unavailable
                        </span> --}}
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
