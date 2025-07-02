<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div>
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>


                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

            </div>
            <div>
                <!-- NIM -->
                <div class="">
                    <x-input-label for="nim" :value="__('NIM')" />

                    <x-text-input id="nim" class="block mt-1 w-full" type="text" :value="old('nim')"
                        name="nim" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                </div>

                <!-- prodi -->
                <div class="mt-4">
                    <x-input-label for="prodi" :value="__('Program Studi')" />

                    <x-text-input id="prodi" class="block mt-1 w-full" type="text" :value="old('prodi')"
                        name="prodi" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('prodi')" class="mt-2" />
                </div>

                <!-- sks -->
                <div class="mt-4">
                    <x-input-label for="sks" :value="__('SKS')" />

                    <x-text-input id="sks" class="block mt-1 w-full" type="text" :value="old('sks')"
                        name="sks" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('sks')" class="mt-2" />
                </div>

                <!-- semester -->
                <div class="mt-4">
                    <x-input-label for="semester" :value="__('Semester')" />

                    <x-text-input id="semester" class="block mt-1 w-full" type="text" :value="old('semester')"
                        name="semester" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('semester')" class="mt-2" />
                </div>

            </div>




        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Sudah Mendaftar?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
