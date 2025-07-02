<x-app-layout>
    <div class="grid grid-cols-3 gap-5 m-5 ">
        <div class="bg-white rounded-lg shadow-lg p-5 max-h-fit">
            <p class="text-sm font-semibold my-2">Status Pendaftaran</p>
            <div class="border-b mt-3 border-gray-400"></div>
            <div class="flex justify-between items-center my-3">
                <div>
                    <p class="text-md font-semibold">Pendaftaran</p>
                    <p class="text-sm">Belum mendaftar</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffcc00" class="size-6">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                        clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="size-6">
                    <path fill-rule="evenodd"
                        d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                        clip-rule="evenodd" />
                </svg>

            </div>
            <div class="flex justify-between items-center my-3">
                <div>
                    <p class="text-md font-semibold">Status</p>
                    <p class="text-sm">Belum kirim</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffcc00" class="size-6">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                        clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="size-6">
                    <path fill-rule="evenodd"
                        d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                        clip-rule="evenodd" />
                </svg>

            </div>
        </div>




        <div class="col-span-2 bg-white rounded-lg shadow-lg p-5 max-h-fit  mb-4 border-b border-gray-200 ">
            <div class="flex flex-wrap text-sm font-medium text-center text-gray-500">
                <div class="me-2">
                    <button id="pendaftaran-tab" aria-controls="pendaftaran" role="tab" aria-selected="true"
                        class="inline-block p-4 bg-gray-100 rounded-t-lg text-blue-600">
                        Pendaftaran
                    </button>
                </div>
                <div class="me-2">
                    <button id="syarat-tab" aria-controls="syarat" role="tab" aria-selected="false"
                        class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">
                        Syarat Pengajuan
                    </button>
                </div>
                <div class="me-2">
                    <button id="kirim-tab" aria-controls="kirim" role="tab" aria-selected="false"
                        class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">
                        Kirim Ajuan
                    </button>
                </div>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg" id="pendaftaran" role="tabpanel" aria-labelledby="pendaftaran-tab">
                    <p class="font-semibold mb-5">Pendaftaran UKT</p>
                    <div class="flex justify-between items-start">
                        <div class="mb-3">
                            <p class="font-semibold text-sm">KATEGORI:</p>
                            <p class="font-thin text-sm">Penurunan Faktor Ekonomi</p>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">SYARAT:</p>
                            <ul style="list-style-type: disc">
                                <li class="ms-5 text-sm">Semester minimal <b>2</b></li>
                                <li class="ms-5 text-sm">SKS lulus minimal <b>-</b></li>
                                <li class="ms-5 text-sm">Upload dokumen terkait</li>
                                <li class="ms-5 text-sm">Upload surat pernyataan</li>
                            </ul>

                        </div>
                        <div class="mb-3">
                            <p class="font-semibold text-sm">DATA SAAT INI:</p>
                            <p class=" text-sm">PROGRAM STUDI: <b>{{ auth()->user()->prodi }}</b></p>
                            <p class=" text-sm">SKS: <b>{{ auth()->user()->sks }}</b></p>
                            <p class=" text-sm">Semester: <b>{{ auth()->user()->semester }}</b></p>
                        </div>

                    </div>
                    <div class="flex items-center mt-10">
                        <form action="" id="registration-form">
                            <input id="agreement-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2  dark:border-gray-600">
                            <label for="agreement-checkbox" class="ms-2 text-sm font-medium">Pastikan kategori
                                pendaftaran
                                sudah sesuai. <span class="text-red-600">jika sudah disetujui tidak dapat
                                    dibatalkan.</span> </label>
                            <div id="checkbox-error" class="hidden text-red-500 text-sm mt-1">Anda harus mencentang
                                kotak persetujuan terlebih dahulu</div>
                        </form>

                    </div>
                    {{-- button --}}
                    <div class="flex items-center gap-5 mt-10">
                        <a href=""
                            class="px-5 py-2 rounded-lg bg-gray-300 font-semibold text-gray-600">Kembali</a>
                        <button id="continue-button"
                            class="px-5 py-2 rounded-lg bg-teal-200 font-semibold text-teal-600">Lanjutkan</button>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg" id="syarat" role="tabpanel" aria-labelledby="syarat-tab">
                <p class="font-semibold mb-5">Berkas Syarat Pengajuan UKT</p>
                <p class="font-bold mt-5 text-sm">Silahkan unggah dokumen syarat pengajuan UKT</p>
                <p class="font-bold text-red-600 text-sm mb-16">*Silahkan unggah AKTE KEMATIAN ORANG TUA</p>
                <p class="font-bold mb-5">UPLOAD DOKUMEN PERSYARATAN</p>
                <div class="flex flex-col gap-5">
                    <div class="flex justify-between items-center">
                        <p>Jenis Dokumen</p>

                        <form class="w-1/2">
                            <select id="countries"
                                class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400">
                                <option selected>Pilih jenis dokumen</option>
                                <option value="US">Akta Kematian Orang Tua</option>

                            </select>
                        </form>


                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <p>Tanggal dokumen</p>
                        <form action="" class="w-1/2">
                            <input type="date" name="" id="" class="rounded-lg p-2 w-full">
                        </form>
                    </div>
                    <div class="flex justify-between items-center">
                        <p>Unggah dokumen</p>
                        <div>
                            <form action="" class="w-full">
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none  dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-right " id="file_input_help">PDF
                                    (ukuran maksimal file 2MB)</p>
                            </form>

                        </div>
                    </div>
                    {{-- button --}}
                    <div class="flex items-center gap-5 mt-10">
                        <a href=""
                            class="px-5 py-2 rounded-lg border border-red-600 font-semibold text-red-600">Batalkan</a>
                        <a href=""
                            class="px-5 py-2 rounded-lg bg-teal-200 font-semibold text-teal-600">Lanjutkan</a>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg" id="kirim" role="tabpanel" aria-labelledby="kirim-tab">
                <p class="font-semibold mb-5">Dokumen Persyaratan:</p>
                <div class="flex justify-between items-center">
                    <p class="font-semibold text-sm">AKTE KEMATIAN ORANG TUA</p>
                    <a href="" class="text-sm rounded-lg px-2 py-1 bg-teal-200 text-teal-600">Lihat
                        File</a>
                </div>
                {{-- button --}}
                <div class="flex items-center gap-5 mt-10">
                    <a href=""
                        class="px-5 py-2 rounded-lg border border-red-600 font-semibold text-red-600">Batalkan</a>
                    <a href="" class="px-5 py-2 rounded-lg bg-teal-200 font-semibold text-teal-600">Kirim</a>
                </div>

            </div>

        </div>



    </div>
    @vite(['resources/js/pendaftaran.js'])

</x-app-layout>
