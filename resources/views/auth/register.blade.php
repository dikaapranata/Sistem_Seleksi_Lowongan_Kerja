<x-guest-layout>
    <div class="font-semibold text-3xl mb-1 border-b-2 border-gray-400">
        Daftar
    </div>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- No KTP -->
        <div class="mt-2">
            <x-input-label for="noktp" :value="__('No KTP')" />
            <x-text-input id="noktp" class="block mt-1 w-full" type="text" name="noktp" :value="old('noktp')" required autofocus autocomplete="noktp" />
            <x-input-error :messages="$errors->get('noktp')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="nama" :value="__('Nama')" />
            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autocomplete="nama" />
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Jenis Kelamin -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Jenis Kelamin')" />
            <div class="flex items-center pl-4 border border-gray-200 rounded w-1/2 mb-1">
                <input checked id="kel-lk" type="radio" value="{{ App\Models\User::KEL_LK }}" name="jenis_kelamin" class="w-4 h-4 text-gray-700 bg-gray-100 border-gray-300 focus:ring-gray-500 focus:ring-2">
                <label for="kel-lk" class="w-full py-2 ml-2 text-sm font-medium text-gray-900">Laki-laki</label>
            </div>
            <div class="flex items-center pl-4 border border-gray-200 rounded w-1/2">
                <input id="kel-pr" type="radio" value="{{ App\Models\User::KEL_PR }}" name="jenis_kelamin" class="w-4 h-4 text-gray-700 bg-gray-100 border-gray-300 focus:ring-gray-500 focus:ring-2">
                <label for="kel-pr" class="w-full py-2 ml-2 text-sm font-medium text-gray-900">Perempuan</label>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Tempat Lahir -->
        <div class="mt-4">
            <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir')" required autocomplete="tempat_lahir" />
            <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
        </div>

        <!-- Tanggal Lahir -->
        <div class="mt-4">
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required autocomplete="tanggal_lahir" />
            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
        </div>

        <!-- Pendidikan -->
        <div class="mt-4">
            <x-input-label for="pendidikan" :value="__('Pendidikan')" />
            <select name="pendidikan" id="pendidikan" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="" selected>Pilih pendidikan terakhir</option>
                <option value="{{ App\Models\User::PEND_SMA }}">SMA</option>
                <option value="{{ App\Models\User::PEND_D1 }}">D-1</option>
                <option value="{{ App\Models\User::PEND_D2 }}">D-2</option>
                <option value="{{ App\Models\User::PEND_D3 }}">D-3</option>
                <option value="{{ App\Models\User::PEND_D4 }}">D-4</option>
                <option value="{{ App\Models\User::PEND_S1 }}">S-1</option>
                <option value="{{ App\Models\User::PEND_S2 }}">S-2</option>
                <option value="{{ App\Models\User::PEND_S3 }}">S-3</option>
            </select>
            <x-input-error :messages="$errors->get('pendidikan')" class="mt-2" />
        </div>

        <!-- Kota -->
        <div class="mt-4">
            <x-input-label for="kota" :value="__('Kota')" />
            <x-text-input id="kota" class="block mt-1 w-full" type="text" name="kota" :value="old('kota')" required autocomplete="kota" />
            <x-input-error :messages="$errors->get('kota')" class="mt-2" />
        </div>

        <!-- No Telp -->
        <div class="mt-4">
            <x-input-label for="no_telp" :value="__('Nomor Telepon')" />
            <x-text-input id="no_telp" class="block mt-1 w-full" type="text" name="no_telp" :value="old('no_telp')" required autocomplete="no_telp" />
            <x-input-error :messages="$errors->get('no_telp')" class="mt-2" />
        </div>

        <!-- No Telp -->
        <div class="mt-4">
            <x-input-label for="foto" :value="__('Foto')" />
            <x-text-input id="foto" class="block mt-1 w-full" type="file" name="foto" :value="old('foto')" required autocomplete="foto" />
            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
        </div>

        <!-- No Telp -->
        <div class="mt-4">
            <x-input-label for="file_ktp" :value="__('File KTP')" />
            <x-text-input id="file_ktp" class="block mt-1 w-full" type="file" name="file_ktp" :value="old('file_ktp')" required autocomplete="file_ktp" />
            <x-input-error :messages="$errors->get('file_ktp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
