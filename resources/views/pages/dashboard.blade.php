@extends('layouts.app')

@section('content')
    {{-- first grid - informasi --}}
    <!-- Grid Container -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-5">

        <!-- Card Informasi -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Header -->
            <div class="flex items-center gap-3 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-purple-600">
                    <path
                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path
                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
                <h2 class="text-xl font-semibold text-gray-800">Informasi</h2>
            </div>

            <!-- Tanggal dan Konten -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Tanggal -->
                <div class="text-center p-4">
                    <p class="text-gray-600">Senin</p>
                    <p class="text-2xl font-bold text-gray-800">30</p>
                    <p class="text-gray-600">JUN 2025</p>
                </div>

                <!-- Konten -->
                <div class="flex-1">
                    <p class="text-center font-medium text-gray-700 mb-4">
                        Tata Cara Penggunaan & Syarat Pengajuan SIM UKT:
                        <a href="#" class="text-purple-500 hover:underline">Klik Disini</a>
                    </p>
                    <div class="bg-purple-50 border border-purple-100 rounded-lg p-4 text-purple-700">
                        <p class="text-sm font-medium text-center">
                            Untuk pertanyaan terkait SIMUKT, silakan langsung menghubungi Contact Center resmi
                            sesuai dengan kebutuhan Anda, seperti Akademik, Keuangan, atau PPTI. Kami sangat
                            menyarankan untuk tidak menghubungi nomor yang tidak resmi, terutama nomor pribadi yang
                            disebarkan tanpa konfirmasi. Pastikan mendapatkan informasi dari sumber yang terpercaya
                            dan resmi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Pengajuan SIM UKT -->
        <div class="lg:col-span-2 bg-white rounded-lg shadow-md p-6">
            <!-- Header -->
            <div class="flex items-center gap-3 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 text-purple-600">
                    <path
                        d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                    <path fill-rule="evenodd"
                        d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                        clip-rule="evenodd" />
                </svg>
                <h2 class="text-xl font-semibold text-gray-800">Pengajuan SIM UKT</h2>
            </div>

            <!-- Tabel -->
            <div class="">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kategori</th>
                            <th scope="col" class="px-6 py-3">Tanggal</th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris 1 -->
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Angsuran UKT
                            </td>
                            <td class="px-6 py-4">
                                18 Juni 2025 - 30 Juni 2025
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-lg hover:bg-purple-200 transition-colors">
                                    Daftar
                                </a>
                            </td>
                        </tr>

                        <!-- Baris 2 -->
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Penurunan UKT Faktor Ekonomi
                            </td>
                            <td class="px-6 py-4">
                                18 Juni 2025 - 30 Juni 2025
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-lg hover:bg-purple-200 transition-colors">
                                    Daftar
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- second grid --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 my-5">
        <!-- Biodata -->
        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="text-lg font-semibold text-gray-800">Biodata</p>
            </div>

            <div class="flex flex-col sm:flex-row items-start gap-6">
                <img src="{{ asset('images/no-image.png') }}" alt="no-image" class="w-24 h-24 rounded-lg object-cover">
                <div class="grid grid-cols-3 gap-y-2 text-sm text-gray-700">
                    <div>Nama</div>
                    <div class="text-center">:</div>
                    <div>John Doe</div>

                    <div>NIM</div>
                    <div class="text-center">:</div>
                    <div>10</div>

                    <div>Program Studi</div>
                    <div class="text-center">:</div>
                    <div>5</div>

                    <div>IPK</div>
                    <div class="text-center">:</div>
                    <div>5</div>

                    <div>Total SKS</div>
                    <div class="text-center">:</div>
                    <div>5</div>

                    <div>Semester</div>
                    <div class="text-center">:</div>
                    <div>5</div>
                </div>
            </div>
        </div>

        <!-- Kartu Pendaftaran -->
        <div class="bg-white p-6 rounded-lg shadow-md w-full">
            <!-- Judul -->
            <div class="flex items-center gap-2 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M16.5 2.25h-9A2.25 2.25 0 0 0 5.25 4.5v15A2.25 2.25 0 0 0 7.5 21.75h9a2.25 2.25 0 0 0 2.25-2.25v-15A2.25 2.25 0 0 0 16.5 2.25Zm-6.75 15H7.5V15h2.25v2.25Zm0-4.5H7.5V10.5h2.25v2.25Zm0-4.5H7.5V6h2.25v2.25Zm6.75 9H10.5V15H16.5v2.25Zm0-4.5H10.5V10.5H16.5v2.25Zm0-4.5H10.5V6H16.5v2.25Z" />
                </svg>
                <h2 class="text-lg font-semibold text-gray-800">Pendaftaran</h2>
            </div>

            <!-- Informasi Pendaftaran -->
            <div class="flex justify-between items-center gap-2 mb-5">
                <div class="flex flex-row">
                    <p class="text-gray-800 font-medium">Pendaftaran SIM UKT</p>
                    <p class="text-sm text-gray-600">Penurunan UKT Faktor Ekonomi</p>

                </div>

            </div>
            <div class="flex justify-between items-center text-gray-700">
                <div class="flex flex-row gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.5 4.5A1.5 1.5 0 0 1 6 3h12a1.5 1.5 0 0 1 1.5 1.5V6a.75.75 0 0 1-1.5 0V4.5H6V6a.75.75 0 0 1-1.5 0V4.5Zm0 4.5A.75.75 0 0 1 5.25 9h13.5a.75.75 0 0 1 0 1.5H5.25A.75.75 0 0 1 4.5 9Zm0 3.75a.75.75 0 0 1 .75-.75h13.5a.75.75 0 0 1 0 1.5H5.25a.75.75 0 0 1-.75-.75Zm0 3.75a.75.75 0 0 1 .75-.75h13.5a.75.75 0 0 1 0 1.5H5.25a.75.75 0 0 1-.75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                    <p>Status</p>
                </div>
                <div class="flex flex-col gap-2 ">
                    <p class="text-center bg-purple-100 text-purple-500   text-xs rounded-lg p-2">Verifikasi Wakil Dekan</p>
                    <a href="#" class="text-center bg-gray-100 text-xs text-gray-600 rounded-lg p-2">Lihat Detail</a>
                </div>

            </div>

            <!-- Tombol Batalkan -->
            <div class="flex justify-between items-center mt-4">
                <div class="flex items-center gap-2 text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M6.75 2.25a.75.75 0 0 1 .75.75v.75h9V3a.75.75 0 0 1 1.5 0v.75h.75A2.25 2.25 0 0 1 21 6v13.5a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 19.5V6a2.25 2.25 0 0 1 2.25-2.25H6V3a.75.75 0 0 1 .75-.75ZM4.5 9v10.5c0 .414.336.75.75.75h13.5a.75.75 0 0 0 .75-.75V9H4.5Z" />
                    </svg>
                    <p>Pembatalan Pendaftaran</p>
                </div>
                <button class="border border-red-500 text-red-500 px-4 py-1 rounded-md hover:bg-red-50 transition">
                    Batalkan
                </button>
            </div>
        </div>
    </div>

    
@endsection
