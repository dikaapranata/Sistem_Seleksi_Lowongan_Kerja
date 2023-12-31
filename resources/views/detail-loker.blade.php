<x-app-layout>
    @if (session('status'))
    <x-session-status>
        {{ session('status') }}
    </x-session-status>
    @endif
    <div class="bg-white flex justify-between max-w-7xl my-7 mx-8 py-8 px-6 rounded-md shadow-md">
        <div>
            <div class="text-sky-600 font-semibold text-lg">
                {{ $loker->nama }} <span class="text-gray-500 text-sm">{{ ' - ' . $loker->tipe }}</span>
            </div>
            <div class="font-medium">
                {{ $loker->idperusahaan }}
            </div>
            <div class="text-gray-500 text-sm">
                IDR {{ abbreviateNumber($loker->gaji_min) . ' - ' . abbreviateNumber($loker->gaji_max) }}/Bulan
            </div>
            @if ($isClosed)
            <div class="text-sm text-gray-500 mt-3">
                Pendaftaran telah ditutup pada tanggal {{ \Carbon\Carbon::parse($loker->tgl_aktif)->locale('id')->isoFormat('D MMMM Y') }}
            </div>
            @else
            <div class="text-sm text-gray-500 mt-3">
                {{ 'Untill ' .\Carbon\Carbon::parse($loker->tgl_aktif)->locale('id')->isoFormat('D MMMM Y') }}
            </div>
            @endif
        </div>
        <div class="flex flex-col items-end">
            @if ($loker->status == 0 or $isClosed)
            <x-secondary-button>
                Pendaftaran tidak tersedia
                {{ '(' . $applyCount . ')' }}
            </x-secondary-button>
            @else
            <a href="{{ route('loker.apply', $loker->idloker) }}">
                <x-primary-button class="{{ $isApplied ? 'bg-green-600' : 'bg-sky-700' }}">
                    @if ($isApplied)
                        {{ __('Apllied') }}
                    @else
                        {{ __('Aplly') }}
                    @endif
                    {{ '(' . $applyCount . ')' }}
                </x-primary-button>
            </a>
            @endif
            <a href="{{ route('loker.like', $loker->idloker) }}" class="text-pink-500 text-xl mt-1">
                <x-primary-button class="bg-pink-600 text-white hover:bg-pink-400">
                    @if ($isLiked)
                        <i class="fa-solid fa-heart text-lg mr-2"></i> Unlike
                    @else
                        <i class="fa-regular fa-heart text-lg mr-2"></i> Like
                    @endif
                    {{ '(' . $likeCount . ')' }}
                </x-primary-button>
            </a>
        </div>
    </div>

    <div class="bg-white max-w-7xl my-7 mx-8 py-8 px-6 rounded-md shadow-md">
        <div>
            <h4 class="font-bold text-xl">Persyaratan</h4>
            <ul class="list-disc list-inside">
                <li>Usia {{ $loker->usia_min . ' - ' . $loker->usia_max }} tahun</li>
                <li>Pendidikan {{ $loker->pendidikan }}</li>
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
