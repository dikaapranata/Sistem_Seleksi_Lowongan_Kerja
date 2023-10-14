<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            <form action="{{ route('loker.search') }}" method="GET">
                <h4>
                    Find loker
                </h4>
                <div class="flex items-center gap-1 text-xs">
                    <x-text-input id="nama" class="block mt-1 w-full text-sm placeholder:text-sm" type="search" name="nama"
                        placeholder="Search lowongan pekerjaan" :value="request()->nama" />
                    <x-text-input id="usia" class="block mt-1 w-fit text-sm placeholder:text-sm" type="number" name="usia"
                        placeholder="Usia" :value="request()->usia" />
                    <x-text-input id="gaji" class="block mt-1 w-fit text-sm placeholder:text-sm" type="number" name="gaji"
                        placeholder="Gaji" :value="request()->gaji" />
                    <x-text-input id="pendidikan" class="block mt-1 w-fit text-sm placeholder:text-sm" type="search" name="pendidikan"
                        placeholder="Pendidikan" :value="request()->pendidikan" />
                        <input type="submit" value="">
                </div>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse ($lokers as $loker)
                <a href="{{ route('loker.show', $loker->idloker) }}" class="">
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
                <div
                    class="bg-white font-semibold overflow-hidden shadow-sm sm:rounded-lg mb-3 p-6 text-gray-900">
                    Data Not Found!
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
