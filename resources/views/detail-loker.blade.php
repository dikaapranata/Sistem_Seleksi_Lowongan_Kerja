<x-app-layout>

    <div class="bg-white flex justify-between max-w-7xl my-7 mx-8 py-8 px-6 rounded-md shadow-md">
        <div>
            <div class="text-sky-600 font-semibold text-lg">
                {{ $loker->nama }}
            </div>
            <div class="font-medium">
                {{ $loker->idperusahaan }}
            </div>
            <div class="text-sm text-gray-500 mt-3">
                {{ 'Untill ' . \Carbon\Carbon::parse($loker->tgl_aktif)->locale('id')->isoFormat('D MMMM Y') }}
            </div>
        </div>
        <div class="flex flex-col items-end">
            <a href="{{ route('loker.apply', $loker->idloker) }}">
                <x-primary-button class="bg-sky-700">
                    {{ __('Aplly') }}
                </x-primary-button>
            </a>
            <a href="{{ route('loker.like', $loker->idloker) }}" class="text-pink-500 text-xl mt-1">
                <x-primary-button class="bg-pink-600 text-white hover:bg-pink-400">
                    @if ($liked)
                    <i class="fa-solid fa-heart text-lg mr-2"></i> Unlike
                    @else
                    <i class="fa-regular fa-heart text-lg mr-2"></i> Like
                    @endif
                </x-primary-button>
            </a>
        </div>
    </div>

    <div class="bg-white max-w-7xl my-7 mx-8 py-8 px-6 rounded-md shadow-md">
        <div>
            <h4 class="font-bold text-xl">Informasi Lainnya</h4>
            <ul class="list-disc list-inside">
                <li>{{ $loker->usia_min . '-' . $loker->usia_max }}</li>
                <li><i class="fa-solid fa-dollar-sign"></i> {{ abbreviateNumber($loker->gaji_min) . ' - ' . abbreviateNumber($loker->gaji_max) }}</li>
            </ul>
        </div>
        <div class="mt-8">
            <h4 class=" font-bold text-lg">Contact Person</h4>
            <p><i class="fa-solid fa-user mr-3"></i> {{ $loker->nama_cp }}</p>
            <p><i class="fa-solid fa-envelope mr-3"></i> {{ $loker->email_cp }}</p>
            <p><i class="fa-solid fa-phone mr-3"></i> {{ $loker->no_telp_cp }}</p>
        </div>
    </div>
</x-app-layout>
