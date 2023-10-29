<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            <form action="{{ route('loker.search') }}" method="GET">
                <h4>
                    Find loker
                </h4>
                <div class="flex items-center gap-1 text-xs">
                    <x-text-input id="nama" class="block w-full text-sm placeholder:text-sm" type="search" name="nama"
                        placeholder="Search lowongan pekerjaan" :value="request()->nama" />
                    <x-text-input id="usia" class="block w-fit text-sm placeholder:text-sm" type="number" name="usia"
                        placeholder="Usia" :value="request()->usia" />
                    <x-text-input id="gaji" class="block w-fit text-sm placeholder:text-sm" type="number" name="gaji"
                        placeholder="Gaji" :value="request()->gaji" />
                    <x-text-input id="tipe" class="block w-fit text-sm placeholder:text-sm" type="search" name="tipe"
                        placeholder="Tipe" :value="request()->tipe" />
                    <select name="pendidikan" id="pendidikan" class="block w-fit text-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="" selected>Pendidikan</option>
                        @auth
                        <option value="{{ auth()->user()->pendidikan }}" {{ request()->pendidikan == auth()->user()->pendidikan ? 'selected' : '' }}>Pendidikan anda {{ '(' . auth()->user()->pendidikan . ')' }}</option>
                        @endauth
                        <option value="{{ App\Models\User::PEND_SMA }}" {{ request()->pendidikan == App\Models\User::PEND_SMA ? 'selected' : '' }}>SMA</option>
                        <option value="{{ App\Models\User::PEND_D1 }}" {{ request()->pendidikan == App\Models\User::PEND_D1 ? 'selected' : '' }}>D-1</option>
                        <option value="{{ App\Models\User::PEND_D2 }}" {{ request()->pendidikan == App\Models\User::PEND_D2 ? 'selected' : '' }}>D-2</option>
                        <option value="{{ App\Models\User::PEND_D3 }}" {{ request()->pendidikan == App\Models\User::PEND_D3 ? 'selected' : '' }}>D-3</option>
                        <option value="{{ App\Models\User::PEND_D4 }}" {{ request()->pendidikan == App\Models\User::PEND_D4 ? 'selected' : '' }}>D-4</option>
                        <option value="{{ App\Models\User::PEND_S1 }}" {{ request()->pendidikan == App\Models\User::PEND_S1 ? 'selected' : '' }}>S-1</option>
                        <option value="{{ App\Models\User::PEND_S2 }}" {{ request()->pendidikan == App\Models\User::PEND_S2 ? 'selected' : '' }}>S-2</option>
                        <option value="{{ App\Models\User::PEND_S3 }}" {{ request()->pendidikan == App\Models\User::PEND_S3 ? 'selected' : '' }}>S-3</option>
                    </select>
                    <x-primary-button type="submit">
                        Search
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse ($lokers as $loker)
                <a href="{{ route('loker.show', $loker->idloker) }}" class="">
                    <div
                        class="{{ ($loker->status == 0 or \Carbon\Carbon::now()->gte(\Carbon\Carbon::parse($loker->tgl_aktif))) ? 'bg-red-200' : 'bg-white' }} grid grid-cols-4 place-items-center overflow-hidden shadow-sm sm:rounded-lg mb-3 p-6 text-gray-900 hover:bg-gray-200 hover:shadow-inner">
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
                        @if ($loker->status == 0)
                        <div class="text-gray-600 justify-self-end">
                            Pendaftaran tidak tersedia
                        </div>
                        @elseif (\Carbon\Carbon::now()->gte(\Carbon\Carbon::parse($loker->tgl_aktif)))
                        <div class="text-gray-600 justify-self-end">
                            Pendaftaran telah ditutup
                        </div>
                        @else
                        <div class="text-gray-600 justify-self-end">
                            {{ 'Tersisa ' . now()->diffInDays($loker->tgl_aktif) . ' hari' }}
                        </div>
                        @endif
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
    @foreach($lokers as $loker)
    
    @endforeach

    {{ $lokers->appends($query)->links() }}


</x-app-layout>
