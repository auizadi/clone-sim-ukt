<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div x-data="{ showAlert: true }" x-init="setTimeout(() => showAlert = false, 3000)">
        <template x-if="showAlert">
            <div class="fixed inset-x-0 top-15 z-50">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-3">
                    <div class="bg-gray-100 border border-gray-300 overflow-hidden shadow-sm sm:rounded-lg" x-transition>
                        <div class="p-4 text-gray-900">
                            {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>


    {{-- grid --}}
    <div class="grid grid-cols-3 gap-5 mx-5 my-15 py-5">
        {{-- informasi --}}
        <div class="rounded-lg shadow-lg p-5 bg-white max-h-fit">
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path
                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path
                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
                <p>Informasi</p>
            </div>
            <div class="flex justify-between items-center gap-5 my-5">
                <div class="text-center p-2">
                    <p>{{ now()->translatedFormat('l') }}</p>
                    <p class=" font-bold">{{ now()->translatedFormat('d') }}</p>
                    <p>{{ now()->translatedFormat('M Y') }}</p>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <p class="text-center">Tata Cara Penggunaan & Syarat Pengajuan SIM UKT : </p>
                    <a href="#" class="text-sm text-purple-600">Klik Disini</a>
                    <div class="bg-purple-100 text-purple-600 p-5 rounded-lg">
                        <p class="text-center text-sm">Untuk pertanyaan terkait SIMUKT, silakan langsung menghubungi
                            Contact
                            Center resmi sesuai dengan kebutuhan Anda, seperti Akademik, Keuangan, atau PPTI. Kami
                            sangat menyarankan untuk tidak menghubungi nomor yang tidak resmi, terutama nomor pribadi
                            yang disebarkan tanpa konfirmasi. Pastikan mendapatkan informasi dari sumber yang terpercaya
                            dan resmi.</p>

                    </div>
                </div>

            </div>

        </div>

        {{-- pendaftaran --}}
        <div class="col-span-2 rounded-lg shadow-lg p-5 bg-white max-h-fit">
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 0 1-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0 1 13.5 1.5H15a3 3 0 0 1 2.663 1.618ZM12 4.5A1.5 1.5 0 0 1 13.5 3H15a1.5 1.5 0 0 1 1.5 1.5H12Z"
                        clip-rule="evenodd" />
                    <path
                        d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 0 1 9 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0 1 16.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625v-12Z" />
                    <path
                        d="M10.5 10.5a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963 5.23 5.23 0 0 0-3.434-1.279h-1.875a.375.375 0 0 1-.375-.375V10.5Z" />
                </svg>

                <p>Pengajuan SIM UKT</p>
            </div>

            {{-- tabel --}}


            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right my-5 text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-white dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">

                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-gray-100 even:bg-white border-b dark:border-gray-100 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                                Angsuran UKT
                            </th>
                            <td class="px-6 py-4">
                                18 Juni 2025 - 30 Juni 2025
                            </td>

                            <td class="px-6 py-4">
                                <a href="#" class=" text-purple-600 bg-purple-100 rounded-lg p-2">Daftar</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-gray-100 even:bg-white border-b dark:border-gray-200 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                                Penurunan UKT Faktor Ekonomi
                            </th>
                            <td class="px-6 py-4">
                                18 Juni 2025 - 30 Juni 2025
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{ route('pendaftaran.index') }}"
                                    class=" text-purple-600 bg-purple-100 rounded-lg p-2">Daftar</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>
        <div class="col-span-2 bg-white rounded-lg p-5 shadow-lg max-h-fit">
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                        clip-rule="evenodd" />
                </svg>
                <p>Biodata</p>
            </div>
            <div class="flex flex-row gap-5 items-center my-5">
                <img src="{{ asset('images/no-image.png') }}" alt="foto" width="100" class="rounded-lg">
                <div class="grid grid-cols-3 gap-y-2 text-sm text-gray-700">
                    <div>Nama</div>
                    <div class="text-center">:</div>
                    <div><b>{{ auth()->user()->name }}</b></div>

                    <div>NIM</div>
                    <div class="text-center">:</div>
                    <div><b>{{ auth()->user()->nim }}</b></div>

                    <div>Program Studi</div>
                    <div class="text-center">:</div>
                    <div><b>{{ auth()->user()->prodi }}</b></div>

                    <div>Total SKS</div>
                    <div class="text-center">:</div>
                    <div><b>{{ auth()->user()->sks }}</b></div>

                    <div>Semester</div>
                    <div class="text-center">:</div>
                    <div><b>{{ auth()->user()->semester }}</b></div>
                </div>
            </div>
        </div>
        <div class="rounded-lg shadow-lg p-5 bg-white max-h-fit">
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path
                        d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                <p>Pendaftaran</p>
            </div>
            <div class="flex flex-col gap-5">
                <div class="flex gap-2 items-center justify-between mt-5">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path
                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>
                        <p class="text-xs">Pendaftaran SIM UKT</p>
                    </div>

                    <div>
                        <p class="text-xs">Penurunan UKT Faktor Ekonomi</p>
                    </div>


                </div>
                <div class="flex gap-2 items-center justify-between">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                clip-rule="evenodd" />
                        </svg>

                        <p class="text-xs">Status</p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="bg-gray-100 text-gray-600 rounded-lg text-center text-xs p-2">Verifikasi Wakil Dekan
                        </p>
                        <a href="#"
                            class="bg-purple-100 rounded-lg text-purple-600 text-center p-2 text-xs">Lihat Detail</a>
                    </div>


                </div>
                <div class="flex gap-2 items-center justify-between">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path
                                d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                            <path fill-rule="evenodd"
                                d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.133 2.845a.75.75 0 0 1 1.06 0l1.72 1.72 1.72-1.72a.75.75 0 1 1 1.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 1 1-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 1 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>


                        <p class="text-xs">Pembatalan Pendaftaran</p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <a href="#"
                            class="border border-red-600 text-red-600 rounded-lg text-center p-2 text-xs">Batalkan</a>
                    </div>


                </div>
            </div>

        </div>
    </div>
</x-app-layout>
